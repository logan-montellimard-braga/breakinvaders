#include "include/score.hpp"

Score::Score()
{
  score = 0; 
  SCORE_FILE = "src/data/scores.brknvdrs";
  loadBestScore();
}

Score::~Score()
{
  updateBestScore();
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

void Score::loadBestScore()
{
  QFile file(SCORE_FILE);
  if (!file.open(QIODevice::ReadOnly | QIODevice::Text))
  {
    bestScore = "0";
  }
  else
  {
    QByteArray total;
    QByteArray line;
    while (!file.atEnd()) {
      line = file.read(1024);
      total.append(line);
    }
    bestScore = QString(total);
  }
}

void Score::calculateScore(Brick * arr[], const int size, int lives)
{
  score += calcScoreFromBricks(arr, size);
  score += calcScoreFromLives(score, lives);
  score += randomizeScore();
  score -= randomizeScore();
  updateBestScore();
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

int Score::getScore()
{
  return score;
}

int Score::getBestScore()
{
  return bestScore.toInt();
}

void Score::updateBestScore()
{
  if (score > bestScore.toInt())
  {
    QFile data(SCORE_FILE);

    if (data.open(QFile::WriteOnly)) {
      QTextStream out(&data);
      out << score;
    }
  }
}
