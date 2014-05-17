#ifndef PADDLE_H
#define PADDLE_H

#include <QImage>
#include <QRect>

class Paddle
{
  public:
    Paddle();

  public:
    void resetState();
    void moveLeft(int);
    void moveRight(int);
    int getGeneratedPos();
    QRect getRect();
    QImage & getImage();

  private:
    int randomizePos();
    QImage image;
    QRect rect;
    int randPos;
};

#endif
