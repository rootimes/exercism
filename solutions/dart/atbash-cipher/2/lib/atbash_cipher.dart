class AtbashCipher {
  final Map<String, String> ciphers = {
    for (var i = 0; i < 26;i++)
      String.fromCharCode('a'.codeUnitAt(0) + i):String.fromCharCode('z'.codeUnitAt(0) - i),
    for (var i = 1; i < 10;i++) '$i':'$i'
  };

  String encode(String word) {
    int count = 0;
    final encoded = StringBuffer();
    for (var char in word.split('')) {
      char = char.toLowerCase();
      if (!RegExp(r'[a-z0-9]').hasMatch(char)) continue;
      encoded.write(this.ciphers[char]);
      count++;
      if (count == 5) {
        encoded.write(' ');
        count = 0;
      }
    }
    return encoded.toString().endsWith(' ') ? 
      encoded.toString().substring(0, encoded.length - 1):
      encoded.toString();
  }

  String decode(String word) => word.split('').map(_translate).join();
  String _translate(String char) => this.ciphers[char] ?? '';
}
