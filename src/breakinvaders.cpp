#include "include/breakinvaders.h"
#include <sys/time.h>
#include <QPainter>
#include <QApplication>

BreakInvaders::BreakInvaders(QWidget *parent) : QWidget(parent)
{
  paddle = new Paddle();
  ball = new Ball(paddle->getGeneratedPos());

  constructBricks();
  resetGameStatus();
}

BreakInvaders::~BreakInvaders()
{
  delete ball;
  delete paddle;
  for (int i = 0; i < BRICKS; i++)
  {
    delete bricks[i];
  }
}

void BreakInvaders::constructBricks()
{
  int k = 0;
  for (int i = 0; i < ROWS; i++)
  {
    for (int j = 0; j < COLS; j++)
    {
      bricks[k] = new Brick(j*30+60, i*15+30);
      k++;
    }
  }
}

void BreakInvaders::resetGameStatus()
{
  if (gameWon)
  {
    paddle->resetState();
    ball->resetState(paddle->getGeneratedPos());
  }

  gameOver = FALSE;
  gameWon = FALSE;
  gameStarted = FALSE;
  paused = FALSE;
  lives = MAX_LIVES;
  lastLostTime = time(NULL);
  for (int i = 0; i < BRICKS; i++)
  {
    bricks[i]->setDestroyed(FALSE);
  }
}

void BreakInvaders::paintEvent(QPaintEvent *event)
{
  event->rect();
  QPainter painter(this);

  if (gameOver)
  {
    QFont font("Monospace", 15, QFont::DemiBold);
    QFontMetrics fm(font);
    int textWidth = fm.width("Perdu !");

    painter.setFont(font);
    int h = height();
    int w = width();

    painter.translate(QPoint(w/2, h/2));
    painter.drawText(-textWidth/2, 0, "Perdu !");
  }
  else if(gameWon)
  {
    QFont font("Monospace", 15, QFont::DemiBold);
    QFontMetrics fm(font);
    int textWidth = fm.width("Victoire !");

    painter.setFont(font);
    int h = height();
    int w = width();

    painter.translate(QPoint(w/2, h/2));
    painter.drawText(-textWidth/2, 0, "Victoire !");
  }
  else
  {
    painter.drawImage(ball->getRect(), ball->getImage());
    painter.drawImage(paddle->getRect(), paddle->getImage());

    for (int i = 0; i < BRICKS; i++)
    {
      if (!bricks[i]->isDestroyed())
      {
        painter.drawImage(bricks[i]->getRect(), bricks[i]->getImage());
      }
    }
  }
}

void BreakInvaders::timerEvent(QTimerEvent *event)
{
  event->timerId();
  ball->autoMove();
  checkCollision();
  repaint();
}

void BreakInvaders::keyPressEvent(QKeyEvent *event)
{
  switch (event->key()) {
    case Qt::Key_Left: case Qt::Key_H: case Qt::Key_J:
    {
      if (!paused && gameStarted)
      {
        int x = paddle->getRect().x();
        for (int i = 1; i <= 5; i++)
        {
          paddle->moveLeft(x-- - 2*i);
        }
      }
    }
    break;
    case Qt::Key_Right: case Qt::Key_L: case Qt::Key_K:
    {
      if (!paused && gameStarted)
      {
        int x = paddle->getRect().x();
        for (int i = 1; i <= 5; i++)
        {
          paddle->moveRight(x++ + 2*i);
        }
      }
    }
    break;
    case Qt::Key_P:
    {
      pauseGame();
    }
    break;
    case Qt::Key_Space:
    {
      if (gameStarted)
      {
        pauseGame();
      }
      else
      {
        startGame();
      }
    }
    break;
    case Qt::Key_V:
    {
      for (int i = 0; i < BRICKS - 1; i++)
      {
        bricks[i]->setDestroyed(TRUE);
      }
    }
    break;
    case Qt::Key_Escape: case Qt::Key_Q:
    {
      qApp->exit();
    }
    break;
    default:
    {
      QWidget::keyPressEvent(event);
    }
  }
}

void BreakInvaders::startGame()
{
  if (!gameStarted)
  {
    if (lives != MAX_LIVES)
    {
      paddle->resetState();
      ball->resetState(paddle->getGeneratedPos());
    }

    resetGameStatus();
    gameStarted = TRUE;
    timerId = startTimer(10);
  }
}

void BreakInvaders::pauseGame()
{
  if (paused)
  {
    timerId = startTimer(10);
    paused = FALSE;
  }
  else
  {
    paused = TRUE;
    killTimer(timerId);
  }
}

void BreakInvaders::stopGame()
{
  killTimer(timerId);
  gameOver = TRUE;
  gameStarted = FALSE;
}

void BreakInvaders::victory()
{
  killTimer(timerId);
  gameWon = TRUE;
  gameStarted = FALSE;
}

void BreakInvaders::lostBall()
{
  currentTime = time(NULL);
  if (lastLostTime < currentTime - 1)
  {
    lastLostTime = time(NULL);
    lives--;

    if (lives <= 0)
    {
      stopGame();
    }
    else
    {
      paddle->resetState();
      ball->resetState(paddle->getGeneratedPos());
      pauseGame();
    }
  }
}

void BreakInvaders::checkCollision()
{
  if (ball->getRect().bottom() > 400)
  {
    lostBall();
  }

  for (int i = 0, j = 0; i < BRICKS; i++)
  {
    if (bricks[i]->isDestroyed())
    {
      j++;
    }
    if (j == BRICKS)
    {
      victory();
    }
  }

  if ((ball->getRect()).intersects(paddle->getRect()))
  {
    int paddleLPos = paddle->getRect().left();
    int ballLPos = ball->getRect().left();

    int first = paddleLPos + 8;
    int second = paddleLPos + 16;
    int third = paddleLPos + 24;
    int fourth = paddleLPos + 32;

    if (ballLPos < first)
    {
      ball->setXDir(-1);
      ball->setYDir(-1);
    }

    if (ballLPos >= first && ballLPos < second)
    {
      ball->setXDir(-1);
      ball->setYDir(-1*ball->getYDir());
    }

    if (ballLPos >= second && ballLPos < third)
    {
      ball->setXDir(0);
      ball->setYDir(-1);
    }

    if (ballLPos >= third && ballLPos < fourth)
    {
      ball->setXDir(1);
      ball->setYDir(-1*ball->getYDir());
    }

    if (ballLPos > fourth)
    {
      ball->setXDir(1);
      ball->setYDir(-1);
    }
  }

  for (int i = 0; i < BRICKS; i++)
  {
    if ((ball->getRect()).intersects(bricks[i]->getRect()))
    {
      int ballLeft = ball->getRect().left();
      int ballHeight = ball->getRect().height();
      int ballWidth = ball->getRect().width();
      int ballTop = ball->getRect().top();

      QPoint pointRight(ballLeft + ballWidth + 1, ballTop);
      QPoint pointLeft(ballLeft - 1, ballTop);
      QPoint pointTop(ballLeft, ballTop -1);
      QPoint pointBottom(ballLeft, ballTop + ballHeight + 1);

      if (!bricks[i]->isDestroyed())
      {
        if(bricks[i]->getRect().contains(pointRight))
        {
          ball->setXDir(-1);
        }
        else if(bricks[i]->getRect().contains(pointLeft))
        {
          ball->setXDir(1);
        }

        if(bricks[i]->getRect().contains(pointTop))
        {
          ball->setYDir(1);
        }
        else if(bricks[i]->getRect().contains(pointBottom))
        {
          ball->setYDir(-1);
        }

        bricks[i]->setDestroyed(TRUE);
      }
    }
  }
}
