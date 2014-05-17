#include "include/score.h"

Score::Score()
{
  score = 0;
}

Score::~Score()
{
}

void Score::resetScore()
{
  score = 0;
}

void Score::initScore(int baseScore)
{
  if (score == 0)
  {
    score = baseScore;
  }
}

void Score::calculateScore(Brick * arr[], const int size, int lives)
{
  score += calcScoreFromBricks(arr, size);
  score += calcScoreFromLives(score, lives);
  score += randomizeScore();
  score -= randomizeScore();
}

int Score::getScore()
{
  return score;
}

int Score::calcScoreFromBricks(Brick * arr[], const int size)
{
  int sum = 0;
  for (int i = 0; i < size; i++)
  {
    if (arr[i]->isDestroyed())
    {
      sum += 100 - 2 * i;
    }
  }
  return sum;
}

int Score::calcScoreFromLives(int score, int lives)
{
  return score * (lives + 1);
}

int Score::randomizeScore()
{
  return (rand() % score/3 + score/8);
}
