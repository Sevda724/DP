<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\Catalog;
use App\Models\News;
use App\Models\User;


class AdminCatalogPartTest extends TestCase
{
  
/** @test */ 
public function test_insert_data_successfully()
{
    $data = [
        'category' => 'Movie',
        'title' => 'The Shawshank Redemption',
        'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
        'text' => 'The Shawshank Redemption is a 1994 American drama film written and directed by Frank Darabont, based on the 1982 Stephen King novella Rita Hayworth and Shawshank Redemption. It stars Tim Robbins as Andy Dufresne, a banker who is sentenced to life in Shawshank State Penitentiary for the murder of his wife and her lover, despite his claims of innocence. Over the following two decades, he befriends a fellow prisoner, contraband smuggler Ellis "Red" Redding (Morgan Freeman), and becomes instrumental in a money-laundering operation led by the prison warden Samuel Norton (Bob Gunton). William Sadler, Clancy Brown, Gil Bellows, and James Whitmore appear in supporting roles.',
        'photo' => 'https://www.google.com/search?q=the+shawshank',
        'year' => '1994',
        'director' => 'Frank Darabont',
        'trailer' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
        'awards' => 'Nominated for 7 Oscars. Another 21 wins & 35 nominations.',
        'title_ru' => 'Побег из Шоушенка',
        'text_ru' => 'Фильм повествует о банкире Энди Дюфрейне, который был приговорен к пожизненному заключению в тюрьме Шоушенк за убийство своей жены и ее любовника, несмотря на его заявления о невиновности. В тюрьме он знакомится с заключенным Эллисом Реддингом и становится важным звеном в операции по отмыванию денег, возглавляемой директором тюрьмы Сэмюэлем Нортоном.',
        'director_ru' => 'Фрэнк Дарабонт',
        'awards_ru' => 'Номинирован на 7 Оскаров. Еще 21 победа и 35 номинаций.',
    ];

    $response = $this->post(route('insert-data'), $data);

    $response       
    ->assertSessionHas('status_success', 'Inserted Successfully');
    $this->assertDatabaseHas('catalogs', $data);


}
    
/** @test */
    public function testInsertFilmsFormShowsRequiredFieldErrors()
    {
        $response = $this->post('/insert-data', []);

        $response->assertSessionHasErrors(['category', 'title', 'description', 'text', 'photo', 'year', 'director', 'title_ru', 'text_ru', 'director_ru']);
    }

/** @test */
    public function testValidDataCreatesNewCatalogRecord()
	{
    $data = [
        'category' => 'Movie',
        'title' => 'The Shawshank Redemption',
        'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'photo' => 'https://www.example.com/images/shawshank-redemption.jpg',
        'year' => 1994,
        'director' => 'Frank Darabont',
        'trailer' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
        'awards' => 'Nominated for 7 Oscars. Another 21 wins & 35 nominations.',
        'title_ru' => 'Побег из Шоушенка',
        'text_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'director_ru' => 'Фрэнк Дарабонт',
        'awards_ru' => 'Номинирован на 7 Оскаров. Еще 21 победа и 35 номинаций.'
    ];

    $response = $this->post('/insert-data', $data);

    $this->assertDatabaseHas('catalogs', $data);

    $response = $this->post('/insert-data', $data);
    $response ->assertSessionHas('status_error', 'This title already exists!');
    }

/** @test */
	public function testUpdateCatalog()
    {
	$catalog = Catalog::create([
        'category' => 'Movie',
        'title' => 'The Shawshank Redemption',
        'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'photo' => 'https://www.example.com/images/shawshank-redemption.jpg',
        'year' => 1994,
        'director' => 'Frank Darabont',
        'trailer' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
        'awards' => 'Nominated for 7 Oscars. Another 21 wins & 35 nominations.',
        'title_ru' => 'Побег из Шоушенка',
        'text_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'director_ru' => 'Фрэнк Дарабонт',
        'awards_ru' => 'Номинирован на 7 Оскаров. Еще 21 победа и 35 номинаций.'
    ]);


		$response = $this->put(route('catalogs.update', $catalog->id), [
            'category' => 'New Category',
            'title' => 'New Title',
            'description' => 'New Description',
            'text' => 'New Text',
            'photo' => 'New Photo',
            'year' => 2022,
            'director' => 'New Director',
            'trailer' => 'New Trailer',
            'awards' => 'New Awards',
            'title_ru' => 'Новый Заголовок',
            'text_ru' => 'Новый Текст',
            'director_ru' => 'Новый Режиссер',
            'awards_ru' => 'Новые Награды',
        ]);

        $response->assertStatus(302);
        //$response->assertRedirect(route('catalogs.index'));

        $this->assertDatabaseHas('catalogs', [
        	'id' => $catalog->id,
        	'category' => 'New Category',
            'title' => 'New Title',
            'description' => 'New Description',
            'text' => 'New Text',
            'photo' => 'New Photo',
            'year' => 2022,
            'director' => 'New Director',
            'trailer' => 'New Trailer',
            'awards' => 'New Awards',
            'title_ru' => 'Новый Заголовок',
            'text_ru' => 'Новый Текст',
            'director_ru' => 'Новый Режиссер',
            'awards_ru' => 'Новые Награды',
        ]);
        $response->assertSessionHas('status', 'Updated Successfully');

    }

/** @test */
    public function testUpdateFilmsFormShowsRequiredFieldErrors()
    {
    	$catalog = Catalog::create([
        'category' => 'Movie',
        'title' => 'The Shawshank Redemption',
        'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'photo' => 'https://www.example.com/images/shawshank-redemption.jpg',
        'year' => 1994,
        'director' => 'Frank Darabont',
        'trailer' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
        'awards' => 'Nominated for 7 Oscars. Another 21 wins & 35 nominations.',
        'title_ru' => 'Побег из Шоушенка',
        'text_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'director_ru' => 'Фрэнк Дарабонт',
        'awards_ru' => 'Номинирован на 7 Оскаров. Еще 21 победа и 35 номинаций.'
    ]);
        $response = $this->post(route('catalogs.update', $catalog->id), []);
        $response->assertStatus(405);
		/*$response->assertSessionHasErrors(['category', 'title', 'description', 'text', 'photo', 'year', 'director', 'trailer', 'title_ru', 'text_ru', 'director_ru', 'awards', 'awards_ru']);*/
	}

    
    /** @test */
    public function film_can_be_deleted()
    {
        // Create a new catalog
       $catalog = Catalog::create([
        'category' => 'Movie',
        'title' => 'The Shawshank Redemption',
        'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'photo' => 'https://www.example.com/images/shawshank-redemption.jpg',
        'year' => 1994,
        'director' => 'Frank Darabont',
        'trailer' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
        'awards' => 'Nominated for 7 Oscars. Another 21 wins & 35 nominations.',
        'title_ru' => 'Побег из Шоушенка',
        'text_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin aliquet sapien, vel pulvinar felis bibendum nec. Nulla facilisi. Nam porta nunc eget bibendum placerat. In hac habitasse platea dictumst. Maecenas non libero eu sapien ullamcorper vestibulum sit amet non velit. Mauris interdum purus at leo rutrum, vel efficitur justo congue.',
        'director_ru' => 'Фрэнк Дарабонт',
        'awards_ru' => 'Номинирован на 7 Оскаров. Еще 21 победа и 35 номинаций.'
    ]);

        // Delete the catalog
        $response = $this->delete(route('catalogs.destroy', $catalog->id));

        // Check that the catalog no longer exists in the database
        $this->assertDatabaseMissing('catalogs', [
            'id' => $catalog->id,
        ]);

        // Check that the response has a 302 status code (redirect)
        $response->assertStatus(302);

        // Check that the user is redirected to the correct page
        //$response->assertRedirect(route('catalogs.index'));

        // Check that the success message is displayed
        $response->assertSessionHas('status', 'Deleted Successfully');
    }

/** @test */    
public function testNewsInsert()
{
    
    $data = [
        'title_en' => 'Title in English',
        'description_en' => 'Description in English',
        'title_ru' => 'Title in Russian',
        'description_ru' => 'Description in Russian',
        'photo1' => 'https://example.com/photo1.jpg',
        'photo2' => 'https://example.com/photo2.jpg',
        'photo3' => 'https://example.com/photo3.jpg',
    ];

    $response = $this->post(route('news.insert'), $data);

    // assert that the response status code is 302 (redirect)
    $response->assertStatus(302);

    // assert that the news item was created in the database
    $this->assertDatabaseHas('news', [
        'title_en' => 'Title in English',
        'description_en' => 'Description in English',
        'title_ru' => 'Title in Russian',
        'description_ru' => 'Description in Russian',
        'photo1' => 'https://example.com/photo1.jpg',
        'photo2' => 'https://example.com/photo2.jpg',
        'photo3' => 'https://example.com/photo3.jpg',
    ]);

    $response->assertSessionHas('success', 'News has been added successfully!');

}

/** @test */
public function testUpdateNews()
{
    // create a fake user
    /*$user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password')
        ]);*/
	$newsData = News::create([
        'title_en' => 'New title in English',
        'description_en' => 'New description in English',
        'title_ru' => 'New title in Russian',
        'description_ru' => 'New description in Russian',
        'photo1' => 'https://example.com/new-photo1.jpg',
        'photo2' => 'https://example.com/new-photo2.jpg',
        'photo3' => 'https://example.com/new-photo3.jpg',
    ]);


		$response = $this->post(route('news.update', $newsData->id), [
        'title_en' => 'New title in English1',
        'description_en' => 'New description in English1',
        'title_ru' => 'New title in Russian1',
        'description_ru' => 'New description in Russian1',
        'photo1' => 'https://example.com/new-photo11.jpg',
        'photo2' => 'https://example.com/new-photo21.jpg',
        'photo3' => 'https://example.com/new-photo31.jpg',
        ]);

        //$response->assertStatus(302);
        //$response->assertRedirect(route('catalogs.index'));

        $this->assertDatabaseHas('news', [
        'id' => $newsData->id,
        'title_en' => 'New title in English1',
        'description_en' => 'New description in English1',
        'title_ru' => 'New title in Russian1',
        'description_ru' => 'New description in Russian1',
        'photo1' => 'https://example.com/new-photo11.jpg',
        'photo2' => 'https://example.com/new-photo21.jpg',
        'photo3' => 'https://example.com/new-photo31.jpg',
        ]);

        $response->assertSessionHas('success', 'News record updated successfully!');

}


/** @test */
    public function news_can_be_deleted()
    {
        // Create a new catalog
       $news = News::create([
        'title_en' => 'Title in English',
        'description_en' => 'Description in English',
        'title_ru' => 'Title in Russian',
        'description_ru' => 'Description in Russian',
        'photo1' => 'https://example.com/photo1.jpg',
        'photo2' => 'https://example.com/photo2.jpg',
        'photo3' => 'https://example.com/photo3.jpg',
    ]);

        // Delete the catalog
        $response = $this->get(route('news.delete', $news->id));

        // Check that the catalog no longer exists in the database
        $this->assertDatabaseMissing('news', [
            'id' => $news->id,
        ]);

        // Check that the response has a 302 status code (redirect)
        $response->assertStatus(302);

        // Check that the user is redirected to the correct page
        //$response->assertRedirect(route('catalogs.index'));

        // Check that the success message is displayed
        $response->assertSessionHas('success', 'News deleted successfully!');
    }

/** @test */ 	
 	public function testInserNewsFormShowsRequiredFieldErrors()
    {
        $response = $this->post(route('news.insert'), []);

        $response->assertSessionHasErrors(['title_en', 'description_en', 'title_ru', 'description_ru', 'photo1']);
    }

    public function testUpdateNewsFormShowsRequiredFieldErrors()
    {
    	$newsData = News::create([
        'title_en' => 'New title in English',
        'description_en' => 'New description in English',
        'title_ru' => 'New title in Russian',
        'description_ru' => 'New description in Russian',
        'photo1' => 'https://example.com/new-photo1.jpg',
        'photo2' => 'https://example.com/new-photo2.jpg',
        'photo3' => 'https://example.com/new-photo3.jpg',
    ]);
        $response = $this->post(route('news.update', $newsData -> id), []);

        $response->assertSessionHasErrors(['title_en', 'description_en', 'title_ru', 'description_ru', 'photo1']);
    }
}
