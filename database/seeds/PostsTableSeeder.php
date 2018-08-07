<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	['title'=>'HLV Valverde nói gì trước tin đồn Barca quan tâm Pogba?',
        	 'content'=>'Ernesto Valverde phát biểu về Paul Pogba, nhà cầm quân người Tây Ban Nha đã khen ngợi ngôi sao người Pháp là một trong những tiền vệ trung tâm xuất sắc nhất châu Âu thời điểm hiện tại.'
        	],
        	['title'=>'Barca CHÍNH THỨC chiêu mộ thành công sao khủng Bayern Munich',
        	 'content'=>'Barca mua Arturo Vidal thành công, trang chủ của đội bóng chủ sân Camp Nou xác nhận ký hợp đồng 3 năm với cầu thủ người Chile.'
        	],
        	['title'=>'Barca mua thành công Vidal',
        	 'content'=>'Barca đã lên kế hoạch đưa về một tiền vệ thế vị trí do Paulinho để lại, họ nhắm khá nhiều mục tiêu. Sau một thời gian dài tìm kiếm.'
        	],
        	['title'=>'Arturo Vidal nói gì khi rời Bayern?',
        	 'content'=>'Cám ơn BLĐ Bayern và NHM đội bóng này, tôi thực sự rất thích thời gian gắn bó với Bayern Munich. Tôi muốn cảm ơn câu lạc bộ đã đồng ý để tôi có một thử thách khác ở Barcelona.'
        	]
        ]);
    }
}
