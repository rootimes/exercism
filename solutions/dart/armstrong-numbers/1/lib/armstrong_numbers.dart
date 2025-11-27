import 'dart:math';

class ArmstrongNumbers {
  bool isArmstrongNumber(String numbers) {
    BigInt sum = BigInt.zero;
    final power = numbers.length;
    
    for (final char in numbers.split('')) {
      int number = int.parse(char);
      sum += _bigPow(BigInt.from(number), power);
    }

    return BigInt.parse(numbers) == sum;
  }

  BigInt _bigPow(BigInt base, int exponent) {
    var result = BigInt.one;
    var b = base;
    var e = exponent;
    while (e > 0) {
      if (e.isOdd) result *= b;
      b *= b;
      e >>= 1; // e ~/= 2
    }
    return result;
  }
}
