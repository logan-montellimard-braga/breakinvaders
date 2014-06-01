#ifndef BRICK_H
#define BRICK_H

#include <QImage>
#include <QRect>

class Brick
{
  public:
    Brick(int, int, int imageSeed = 1);

  public:
    void resetState();
    bool isDestroyed();
    void setDestroyed(bool);
    bool isNullified();
    void setNullified(bool);
    QRect getRect();
    void setRect(QRect);
    QImage & getImage();

  private:
    QImage image;
    QRect rect;
    int position;
    bool destroyed;
    bool nullified;
};

#endif
