<?php
/*****************************************************
* 
* Author :
* Version :
* 
* Description : Upload des fichiers
*  
* 
*/

namespace UploadController;

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
function index()
{
    //
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

function store()
{
    $target_dir = ROOT_DIR . '/public/upload/';  
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["tmp_name"]); // on crée le nom du fichier dans notre dossier
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file); // on copie le contenu du fichier dans le contenant ci-dessus
    $nom_fichier = $_FILES["fileToUpload"]["name"];
    $nom_fichier_tmp = basename($_FILES["fileToUpload"]["tmp_name"]);

    $array_fichier = [$nom_fichier, $nom_fichier_tmp];
    return $array_fichier;
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */

function update(Request $request, $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */

function destroy($id)
{
    //
}