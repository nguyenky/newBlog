<?php

use Faker\Factory as Faker;
use App\Models\Playlist;
use App\Repositories\PlaylistRepository;

trait MakePlaylistTrait
{
    /**
     * Create fake instance of Playlist and save it in database
     *
     * @param array $playlistFields
     * @return Playlist
     */
    public function makePlaylist($playlistFields = [])
    {
        /** @var PlaylistRepository $playlistRepo */
        $playlistRepo = App::make(PlaylistRepository::class);
        $theme = $this->fakePlaylistData($playlistFields);
        return $playlistRepo->create($theme);
    }

    /**
     * Get fake instance of Playlist
     *
     * @param array $playlistFields
     * @return Playlist
     */
    public function fakePlaylist($playlistFields = [])
    {
        return new Playlist($this->fakePlaylistData($playlistFields));
    }

    /**
     * Get fake data of Playlist
     *
     * @param array $postFields
     * @return array
     */
    public function fakePlaylistData($playlistFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'content' => $fake->text,
            'note' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $playlistFields);
    }
}
