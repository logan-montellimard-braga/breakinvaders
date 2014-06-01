#include "include/paddle.hpp"

Paddle::Paddle()
{
  image.load("src/images/paddle.png");

  rect = image.rect();
  resetState();
}

int Paddle::randomizePos()
{
  randPos = rand() % 220 + 10;
  return randPos;
}

void Paddle::moveLeft(int left)
{
  if (rect.left() >= 2)
    rect.moveTo(left, rect.top());
}

void Paddle::moveRight(int right)
{
  if (rect.right() <= 298)
    rect.moveTo(right, rect.top());
}

int Paddle::getGeneratedPos()
{
  return randPos;
}

void Paddle::resetState()
{
  rect.moveTo(randomizePos(), 360);
}

QRect Paddle::getRect()
{
  return rect;
}

QImage & Paddle::getImage()
{
  return image;
}
