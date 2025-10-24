class AtbashCipher {
  final ciphers = {
    for (var i = 0; i < 26;i++)
      String.fromCharCode('a'.codeUnitAt(0) + i):String.fromCharCode('z'.codeUnitAt(0) - i)
  };

  final reversedCiphers = {
    for (var i = 0; i < 26;i++)
      String.fromCharCode('z'.codeUnitAt(0) - i):String.fromCharCode('a'.codeUnitAt(0) + i)
  };
  
  String encode(String word) {
    word = word.toLowerCase().replaceAll(RegExp(r'[^a-z0-9]'), '');
    int count = 0;
    final result = StringBuffer();
    for (var char in word.split('')) {
      if (count == 5) {
        count = 0;
        result.write(' ');
      }
      result.write(this.ciphers[char] ?? char);
      count++;
    }
    return result.toString();
  }

  String decode(String word) {
    word = word.toLowerCase().replaceAll(RegExp(r'[^a-z0-9]'), '');
    final result = StringBuffer();
    for (var char in word.split('')) {
      result.write(this.reversedCiphers[char] ?? char);
    }
    return result.toString();
  }
}
