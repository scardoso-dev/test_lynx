<?php

namespace App\Console\Commands;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showPosts {tag?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Afficher les posts';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        //$this->info('Nom de la base de données: '.DB::connection()->getDataBaseName());
        //$addTag = $this->ask("Vous n'avez pas renseigné de tag, souhaitez-vous en ajouter un ?" ."\n" .'Réponse possible : y, yes, o, oui');
        //if($addTag == 'yes' | $addTag == 'y' | $addTag == 'o' | $addTag == 'oui') {
            $this->info('Tapez : 1, 2, 3 ou 4');
            $this->info('1 = covid ; 2 = paris ; 3 = amis ; 4 = travail');
            $tag = $this->ask('Tapez l\'identifiant du tag : ');
            if($tag > 0 && $tag <= 4) {
                $posts; 
                if($tag == 1) {
                    $posts = Post::where('tag_id', '=', Tag::covid()->first()->id)->get();
                }
                if($tag == 2) {
                    $posts = Post::where('tag_id', '=', Tag::paris()->first()->id)->get();
                }
                if($tag == 3) {
                    $posts = Post::where('tag_id', '=', Tag::amis()->first()->id)->get();
                }
                if($tag == 4) {
                    $posts = Post::where('tag_id', '=', Tag::travail()->first()->id)->get();
                } 
                
                // Affichage des posts selon le TAG 
                $this->info('Liste des posts correspondant au tag : '. $tag);
                echo "--------------------------------------------------------------------------------\n";
                echo "   id  |" . " titre \n";
                echo "--------------------------------------------------------------------------------\n";
                foreach ($posts as $post) {
                    echo $post->id."         ".$post->title."\n";
                }
                //echo $posts;
            }
            else {
                $this->error("Tag introuvable, aucun post ne peut être affiché\n");
                echo "Aurevoir\n";
            }
        //}
        //else {
        //    echo "Aurevoir (utilisation d'une réponse inexistante) \n";  
        //}
    }
}
