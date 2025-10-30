class GameOfLife {
  List<List<int>> _board;

  final List<List<int>> _directions = const [
    [-1, -1], [-1, 0], [-1, 1],
    [ 0, -1],          [ 0, 1],
    [ 1, -1], [ 1, 0], [ 1, 1],
  ];
  
  GameOfLife(this._board);

  void tick() {
    var rows = this._board.length;
    if (rows == 0) return;
    final cols = this._board[0].length;

    List<List<int>> next = List.generate(rows, (_) => List<int>.filled(cols, 0));

    for (var i = 0; i < rows; i++){
      for (var j = 0; j < cols; j++){
        int count = 0;
        for (var d in this._directions) {
          int ni = i + d[0];
          int nj = j + d[1];

          if (ni >= 0 && ni < rows && nj >= 0 && nj < cols) {
            count += this._board[ni][nj];
          }
        }
    
        if (this._board[i][j] == 1) {
          next[i][j] = (count == 2 || count == 3) ? 1:0;
        } else {
          next[i][j] = (count == 3) ? 1:0;
        }
      }
    }

    this._board = next;
  }

  List<List<int>> matrix() {
    return this._board;
  }
}
