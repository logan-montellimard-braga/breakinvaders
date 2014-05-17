#ifndef SCORE_H
#define SCORE_H

#include "include/brick.h"
#include <QTextStream>
#include <QFile>
#include <QIODevice>
#include <QByteArray>

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
    int getBestScore();

  private:
    int calcScoreFromBricks(Brick * arr[], const int);
    int calcScoreFromLives(int, int);
    int randomizeScore();
    int score;
    void loadBestScore();
    void updateBestScore();
    QString bestScore;
    QString SCORE_FILE;
};

#endif
