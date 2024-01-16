<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\Client\ImageAnnotatorClient;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    private $announcement_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
        //
    }

    



        public function handle(): void
        {
            $i = Image::find($this->announcement_image_id);
            if(!$i){
                return;
            }
            $image = file_get_contents(storage_path('app/public/' . $i->path));
    
            //impostare la variabile di ambiente GOOGLE_APPLICATION_CREDENTIALS al path del credentials file
    
            putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

            $imageAnnotator = new ImageAnnotatorClient();
            $response = $imageAnnotator->faceDelection($image);
            $faces =$response->getFaceAnnotations();

            foreach($faces as $face){
                $vertices =$face->getBoundingPoly()->getVertices();

                $bounds = [];
                foreach ($vertices as vertex){
                    $bounds[] = [$vertex->getX(), $vertex->getY()];

                }
                $w= $bounds[2][0] - $bounds [0][0];
                $h=$bounds[2][1] - $bounds[0][1];

                $image =SpatieImage::load($srcPath);

                $image->watermark(base_path('resources/img/smile'))

            }

            
    }
}
