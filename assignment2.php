<?php

class TicTacToe
{
    private $board;
    private $currentPlayer;

    public function __construct()
    {
        $this->board = [
            ['', '', ''],
            ['', '', ''],
            ['', '', ''],
        ];
        $this->currentPlayer = 'X';
    }

    public function playMove($row, $col)
    {
        if ($this->isValidMove($row, $col)) {
            $this->board[$row][$col] = $this->currentPlayer;
            $this->currentPlayer = ($this->currentPlayer === 'X') ? 'O' : 'X';
            return true;
        }

        return false;
    }

    public function isValidMove($row, $col)
    {
        if ($row < 0 || $row >= 3 || $col < 0 || $col >= 3) {
            return false;
        }

        if ($this->board[$row][$col] !== '') {
            return false;
        }

        return true;
    }

    public function checkWin()
    {
        // Check rows
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[$i][0] !== '' && $this->board[$i][0] === $this->board[$i][1] && $this->board[$i][0] === $this->board[$i][2]) {
                return true;
            }
        }

        // Check columns
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[0][$i] !== '' && $this->board[0][$i] === $this->board[1][$i] && $this->board[0][$i] === $this->board[2][$i]) {
                return true;
            }
        }

        // Check diagonals
        if ($this->board[0][0] !== '' && $this->board[0][0] === $this->board[1][1] && $this->board[0][0] === $this->board[2][2]) {
            return true;
        }

        if ($this->board[0][2] !== '' && $this->board[0][2] === $this->board[1][1] && $this->board[0][2] === $this->board[2][0]) {
            return true;
        }

        return false;
    }

    public function printBoard()
    {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $this->board[$i][$j];
                if ($j < 2) {
                    echo ' | ';
                }
            }
            echo "\n";
            if ($i < 2) {
                echo '---------';
                echo "\n";
            }
        }
    }
}

// Main program
$game = new TicTacToe();

// Simulate playing moves
$game->playMove(0, 0);
$game->playMove(1, 1);
$game->playMove(0, 1);
$game->playMove(1, 2);
$game->playMove(0, 2);

// Print the final board
$game->printBoard();
