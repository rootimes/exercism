class Etl {
  Map<String, int> transform(Map<String, List<String>> legacy) {
    return Map.fromEntries(
      legacy.entries.expand((e) =>
        e.value.map((letter) =>
          MapEntry(letter.toLowerCase(), int.parse(e.key))
        )
      )
    );
  }
}
