int score(String word) {
  final letters = {
    for (var letter in 'AEIOULNRST'.split('')) letter: 1,
    for (var letter in 'DG'.split('')) letter: 2,
    for (var letter in 'BCMP'.split('')) letter: 3,
    for (var letter in 'FHVWY'.split('')) letter: 4,
    'K': 5,
    for (var letter in 'JX'.split('')) letter: 8,
    for (var letter in 'QZ'.split('')) letter: 10,
  };

  return word.toUpperCase().split('').fold(0, (score, char) => score + (letters[char] ?? 0));
}