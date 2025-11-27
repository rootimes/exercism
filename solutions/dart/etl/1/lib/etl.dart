class Etl {
  Map transform(Map legacy) {
    final result = <String, int>{};

    legacy.forEach((score, letters) {
      for (final letter in letters) {
        result[letter.toLowerCase()] = int.parse(score);
      }
    });

    return result;
  }
}
