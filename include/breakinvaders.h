#ifndef BREAKINVADERS_H
#define BREAKINVADERS_H

#include "include/paddle.h"
#include "include/ball.h"
#include "include/brick.h"
#include "include/score.h"
#include <sys/time.h>
#include <QWidget>
#include <QKeyEvent>

class BreakInvaders : public QWidget
{
  Q_OBJECT

  public:
    BreakInvaders(QWidget *parent = 0);
    ~BreakInvaders();

  protected:
    void paintEvent(QPaintEvent *event);
    void timerEvent(QTimerEvent *event);
    void keyPressEvent(QKeyEvent *event);

    void resetGameStatus();
    void constructBricks();
    void calculateScore();
    void startGame();
    void pauseGame();
    void restartGame();
    void defeat();
    void lostBall();
    void victory();
    void checkCollision();

  private:
    int timerId;
    int lives;
    int score;
    static const int ROWS = 6;
    static const int COLS = 6;
    static const int MAX_LIVES = 3;
    static const int BRICKS = ROWS * COLS;
    unsigned long int lastLostTime;
    unsigned long int currentTime;
    bool gameOver;
    bool gameWon;
    bool gameStarted;
    bool paused;
    Ball *ball;
    Paddle *paddle;
    Brick * bricks[BRICKS];
    Score *scoreController;
};

#endif
