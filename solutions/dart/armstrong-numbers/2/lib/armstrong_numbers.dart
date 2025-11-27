class ArmstrongNumbers {
  bool isArmstrongNumber(String numbers) {
    BigInt sum = BigInt.zero;
    final power = numbers.length;
    
    for (final char in numbers.split('')) {
      int number = int.parse(char);
      sum += BigInt.from(number).pow(power);
    }

    return BigInt.parse(numbers) == sum;
  }
}
