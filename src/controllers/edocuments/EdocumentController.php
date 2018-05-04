<?php
namespace GFL\Elearning\controllers\edocuments;
 
use GFL\Elearning\controllers\ApiController;
use Carbon\Carbon;
use GFL\Elearning\models\EDocument as EDocument;
use GFL\Elearning\requests\EDocumentRequests\CreateDocumentRequest;
 
class EDocumentController extends ApiController
{
    public function index()
    {
        $eDocuments=EDocument::all();
        return $this->response($eDocuments);
    }

    public function store(CreateDocumentRequest $request)
    {
        dd($request->all());
        $eDocument=EDocument::create([
            'name'=>$request->name,
            'description'=>$request->name,
            'file'=>$request->file
        ]);
        return $this->response($eDocuments);
    }

    public function show(EDocument $edocument)
    {
        return $this->response($edocument);
    }

    public function Update(UpdateDocumentRequest $request,EDocument $edocument)
    {
        # code...
    }

    public function destroy(EDocument $edocument)
    {
        # code...
    }

}