<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class deletePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deletePost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Suppresion d\'un post';

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
        $this->info('Suppression d\'un post (par l\'identifiant)');
        $post_id = $this->ask('Identifiant du post que vous souhaitez supprimer ?');
        $post = Post::find($post_id);
        if($post) {
            $confirmed = $this->confirm('Etes-vous sûr de vouloir supprimé ce post ?');
            if(!$confirmed) {
                $this->info('Demande de suppression annulée');
            }
        }
        else {
            $this->error('Le post n\'a pu être supprimé');
        }
        if($post && $confirmed) {
            Post::where('id', '=', $post_id)->delete();
            $this->info('Le poste à été supprimé');
        } 
    }
}
