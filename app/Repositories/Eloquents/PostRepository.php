<?php 
namespace App\Repositories\Eloquents;
use App\Repositories\Eloquents\BaseRepository;
class PostRepository extends BaseRepository {

   function model(){
	return 'App\Post';
}

}
