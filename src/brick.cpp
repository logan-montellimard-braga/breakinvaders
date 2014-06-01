#include "include/brick.hpp"

Brick::Brick(int x, int y, int imageSeed)
{
  switch (imageSeed)
  {
    case 1:
      {
        image.load("src/images/brick.png");
        black = false;
        break;
      }
    case 2:
      {
        image.load("src/images/brick_black.png");
        black = true;
        break;
      }
  }
  destroyed = false;
  rect = image.rect();
  rect.translate(x, y);
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

void Brick::setDestroyed(bool destr)
{
  destroyed = destr;
}

bool Brick::isNullified()
{
  return nullified;
}

void Brick::setNullified(bool nullify)
{
  nullified = nullify;
}

bool Brick::isBlack()
{
  return black;
}

void Brick::setBlack(bool color)
{
  black = color;
  if (!color)
  {
    image.load("src/images/brick.png");
  }
}
