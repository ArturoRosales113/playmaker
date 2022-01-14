<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;
use App\Models\Game;
use App\Models\Score;
use App\Models\Player;
use App\Models\Sport;
use App\Models\Event;
use App\Models\User;


class ScoringController extends Controller
{
    public function gameSetup($id)
    {
        $game = Game::with('referees')->findOrFail($id);
        $teams = $game->teams;
        $tournament = $game->tournament;
        $sport = $game->tournament->league->sport;
        $game['teams'][0]['players'] = Player::with('user')->where('team_id','=', $teams[0]->id)->get();
        $game['teams'][1]['players'] = Player::with('user')->where('team_id','=', $teams[1]->id)->get();
        $game['teams'][0]['score'] = 0;
        $game['teams'][1]['score'] = 0;
        $game['teams'][0]['faltas'] = 0;
        $game['teams'][1]['faltas'] = 0;

        return response()->json([
            'game' => $game,
            'tournament' => $tournament,
            'sport' => $sport
        ], 200);
    }

    public function addScore(Request $request)
    {
        $score = Score::create([
            'player_id'=> $request->player_id,
            'game_id'=> $request->game_id,
            'value'=> $request->value,
            'time' => $request->time,
            'period' => $request->period
        ]);
        return response()->json([
            'score' => $score,
        ], 200);
        
    }

    public function addAction(Request $request)
    {
        $action = Action::create([
            'name' => $request->name,
            'player_id'=> $request->player_id,
            'game_id'=> $request->game_id,
            'value'=> $request->value,
            'time' => $request->time,
            'period' => $request->period
        ]);
        return response()->json([
            'action' => $action,
        ], 200);
        
    }

    public function finishGame(Request $request)
    {   
        
        return response()->json([
            'action' => $action,
        ], 200);
        
    }
}
