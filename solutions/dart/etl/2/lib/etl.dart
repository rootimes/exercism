class Etl {
  Map<String, int> transform(Map<String, List<String>> legacy) {
    final result = <String, int>{};

    legacy.forEach((score, letters) {
      letters.forEach((letter)=> result[letter.toLowerCase()] = int.parse(score));
    });

    return result;
  }
}
