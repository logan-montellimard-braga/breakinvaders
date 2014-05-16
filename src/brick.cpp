#include "include/brick.h"

Brick::Brick(int x, int y) 
{
  image.load("src/images/brick.png");
  destroyed = FALSE;
  givenPoints = FALSE;
  rect = image.rect();
  rect.translate(x, y);
}

Brick::~Brick() {
}

QRect Brick::getRect()
{
  return rect;
}

void Brick::setRect(QRect rct)
{
  rect = rct;
}

QImage & Brick::getImage()
{
  return image;
}

bool Brick::isDestroyed()
{
  return destroyed;
}

bool Brick::hasGivenPoints()
{
  return givenPoints;
}

void Brick::setDestroyed(bool destr)
{
  destroyed = destr;
}

void Brick::setGivenPoints(bool given)
{
  givenPoints = given;
}
