<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        db::table('posts')->insert(
            [
                'title' => 'welcome to portal berita',
                'news_content' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. ad molestias autem ratione esse, ex quidem, voluptatibus beatae perferendis et inventore magnam quod? laborum repellat pariatur repellendus inventore voluptates tempore optio expedita voluptatum ad blanditiis minus ipsam ea nihil harum consequatur vitae facere rerum dignissimos veritatis, asperiores perspiciatis recusandae earum officia nobis! illo delectus at amet cupiditate impedit hic neque eos placeat perferendis incidunt quod nam eligendi, ut pariatur magni, libero sunt nemo facilis? illo, voluptas assumenda? quisquam rerum ratione, nisi sit nesciunt nihil iste, sapiente, fuga fugiat dicta alias aspernatur magni! quasi rerum ipsam maiores. nulla molestias, velit dolores natus ratione ullam adipisci officiis cum repellendus fugit possimus amet temporibus reiciendis eveniet voluptas facere? molestiae doloremque temporibus non autem, sunt, aliquid earum cupiditate quasi minima repudiandae velit tempora commodi fugiat voluptas placeat! voluptatibus accusamus velit quaerat. sapiente officia delectus, aut ipsam ipsa harum repudiandae quisquam ab unde impedit, quod quam facilis consectetur libero debitis! voluptatem adipisci vel nulla aut ipsum minima. illo quos quasi, atque repellendus recusandae, architecto cum perspiciatis voluptatibus numquam eveniet natus quis aspernatur accusamus nam vero ut, ab facere laudantium eligendi eaque provident rerum. cumque labore adipisci similique dolor! quod, velit saepe. atque commodi iusto excepturi sapiente aliquid dolorum assumenda earum at fugiat corporis, enim hic iste obcaecati velit in ipsa eligendi aperiam ipsam ex molestias consectetur asperiores! doloribus odit facere eveniet blanditiis tempore nisi dolore illo neque, fugiat minus? facere cupiditate facilis doloribus exercitationem! vero quibusdam ut expedita doloribus ducimus voluptates libero iste? voluptatem rerum minima similique non! harum, molestias quaerat sed pariatur at esse illo animi, vel reprehenderit obcaecati placeat atque accusamus, id alias nemo aliquid laboriosam consectetur autem doloribus quae unde ipsam? nulla ducimus eveniet consequatur reiciendis sit repellendus possimus, soluta dicta fuga rem autem ea animi asperiores sed enim nesciunt, atque reprehenderit nisi?',
                'author' => 1,
                'created_at'=> carbon::now()->format('y-m-d h:i:s')
            ]
        );
        db::table('posts')->insert(
            [
                'title' => 'Pengumuman',
                'news_content' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. ad molestias autem ratione esse, ex quidem, voluptatibus beatae perferendis et inventore magnam quod? laborum repellat pariatur repellendus inventore voluptates tempore optio expedita voluptatum ad blanditiis minus ipsam ea nihil harum consequatur vitae facere rerum dignissimos veritatis, asperiores perspiciatis recusandae earum officia nobis! illo delectus at amet cupiditate impedit hic neque eos placeat perferendis incidunt quod nam eligendi, ut pariatur magni, libero sunt nemo facilis? illo, voluptas assumenda? quisquam rerum ratione, nisi sit nesciunt nihil iste, sapiente, fuga fugiat dicta alias aspernatur magni! quasi rerum ipsam maiores. nulla molestias, velit dolores natus ratione ullam adipisci officiis cum repellendus fugit possimus amet temporibus reiciendis eveniet voluptas facere? molestiae doloremque temporibus non autem, sunt, aliquid earum cupiditate quasi minima repudiandae velit tempora commodi fugiat voluptas placeat! voluptatibus accusamus velit quaerat. sapiente officia delectus, aut ipsam ipsa harum repudiandae quisquam ab unde impedit, quod quam facilis consectetur libero debitis! voluptatem adipisci vel nulla aut ipsum minima. illo quos quasi, atque repellendus recusandae, architecto cum perspiciatis voluptatibus numquam eveniet natus quis aspernatur accusamus nam vero ut, ab facere laudantium eligendi eaque provident rerum. cumque labore adipisci similique dolor! quod, velit saepe. atque commodi iusto excepturi sapiente aliquid dolorum assumenda earum at fugiat corporis, enim hic iste obcaecati velit in ipsa eligendi aperiam ipsam ex molestias consectetur asperiores! doloribus odit facere eveniet blanditiis tempore nisi dolore illo neque, fugiat minus? facere cupiditate facilis doloribus exercitationem! vero quibusdam ut expedita doloribus ducimus voluptates libero iste? voluptatem rerum minima similique non! harum, molestias quaerat sed pariatur at esse illo animi, vel reprehenderit obcaecati placeat atque accusamus, id alias nemo aliquid laboriosam consectetur autem doloribus quae unde ipsam? nulla ducimus eveniet consequatur reiciendis sit repellendus possimus, soluta dicta fuga rem autem ea animi asperiores sed enim nesciunt, atque reprehenderit nisi?',
                'author' => 1,
                'created_at'=> carbon::now()->format('y-m-d h:i:s')
            ]
        );
    }
}
