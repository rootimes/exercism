class HighScores {
  final List<int> _scores;

  HighScores(this._scores);

  List<int> get scores => _scores;

  int latest() {
    return _scores.last;
  }

  int personalBest() {
    return _scores.reduce((a, b) => a > b ? a : b);
  }

  List<int> personalTopThree() {
    List<int> sorted = List.from(_scores);
    sorted.sort((a, b) => b.compareTo(a));
    return sorted.take(3).toList();
  }
}