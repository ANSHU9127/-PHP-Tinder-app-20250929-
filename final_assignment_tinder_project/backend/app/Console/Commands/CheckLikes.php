
<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\Like;
use Illuminate\Support\Facades\Mail;

class CheckLikes extends Command {
    protected $signature='likes:check';
    protected $description='Check if any person has over 50 likes';

    public function handle(){
        $counts = Like::where('status','like')
            ->selectRaw('person_id, COUNT(*) as total')
            ->groupBy('person_id')
            ->having('total','>=',50)
            ->get();

        foreach($counts as $c){
            Mail::raw('Person ID '.$c->person_id.' has over 50 likes!', 
                fn($m)=>$m->to('admin@example.com')->subject('Popularity Alert'));
        }
    }
}
