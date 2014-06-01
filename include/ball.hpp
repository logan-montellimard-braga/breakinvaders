#ifndef BALL_H
#define BALL_H

#include <QImage>
#include <QRect>

class Ball
{
  public:
    Ball(int paddlePos);

  public:
    void resetState(int paddlePos);
    void moveBottom(int);
    void moveTop(int);
    void moveLeft(int);
    void moveRight(int);
    void autoMove();
    void setXDir(int);
    void setYDir(int);
    int getXDir();
    int getYDir();
    QRect getRect();
    QImage & getImage();

  private:
    int angle;
    int speed;
    int xdir;
    int ydir;
    bool stuck;
    QImage image;
    QRect rect;
};

#endif
