#ifndef SCORE_H
#define SCORE_H

#include "include/brick.h"

class Score
{
  public:
    Score();
    ~Score();

  public:
    void resetScore();
    void initScore(int);
    void calculateScore(Brick * arr[], const int, int);
    int getScore();

  private:
    int calcScoreFromBricks(Brick * arr[], const int);
    int calcScoreFromLives(int, int);
    int randomizeScore();
    int score;
};

#endif
