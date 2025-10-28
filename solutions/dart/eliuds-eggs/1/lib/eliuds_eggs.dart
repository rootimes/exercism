class EggCounter {
  int count(int n) {
    if (n < 0) {
      throw ArgumentError('n must be non-negative');
    }

    int count = 0;
    while (n > 0) {
      n &= (n - 1);
      count++;
    }

    return count;
  }
}
