#include "include/ball.h"

Ball::Ball(int paddlePos)
{
  xdir = 3;
  ydir = -3;

  image.load("src/images/ball.png");

  rect = image.rect();
  resetState(paddlePos);
}

Ball::~Ball()
{
}

void Ball::autoMove()
{
  rect.translate(xdir, ydir);

  if (rect.left() == 0) {
    xdir = 3;
  }

  if (rect.right() == 300) {
    xdir = -3;
  }

  if (rect.top() == 0) {
    ydir = 3;
  }
}

void Ball::resetState(int paddlePos)
{
  int randPosOnPaddle = rand() % 40 + 1;
  rect.moveTo(paddlePos + randPosOnPaddle, 355);
}

void Ball::moveBottom(int bottom)
{
  rect.moveBottom(bottom);
}

void Ball::moveTop(int top)
{
  rect.moveTop(top);
}

void Ball::moveLeft(int left)
{
  rect.moveLeft(left);
}

void Ball::moveRight(int right)
{
  rect.moveRight(right);
}

void Ball::setXDir(int x)
{
  xdir = x;
}

void Ball::setYDir(int y)
{
  ydir = y;
}

int Ball::getXDir()
{
  return xdir;
}

int Ball::getYDir()
{
  return ydir;
}

QRect Ball::getRect()
{
  return rect;
}

QImage & Ball::getImage()
{
  return image;
}
