<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class insertPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertPost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insertion d\'un post';

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
        $this->info('Insertion d\'un post');
        $this->info('Tags disponibles : 1, 2, 3 ou 4');
        $this->info('1 = covid ; 2 = paris ; 3 = amis ; 4 = travail');
        $tag_id = -1;
        $title = '';
        $desc = '';
        while($tag_id < 1 | $tag_id > 4) {
            $tag_id = $this->ask('Tapez l\'identifiant du tag');
        }
        while($title == '') {
            $title = $this->ask('Écrivez le titre du post');
        }
        while($desc == '') {
            $desc = $this->ask('Écrivez la description du post');
        }

        Post::create([
            'tag_id' => $tag_id,
            'title' => $title,
            'desc' => $desc,
        ]);
        $this->info('Insertion du post réussi');
    }
}
