<?php
namespace GFL\Elearning\controllers\edocuments;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use GFL\Elearning\models\EDocument as EDocument;
 
class EdocumentController extends Controller
{
    public function index()
    {
        dd(EDocument::all());
    }

}