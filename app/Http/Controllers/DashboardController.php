<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard() {
        $name  = "Sabbir Hossain";
        $email = "sabbir2dev@gmail.com";
//        return view( 'dashboard.dashboard', ['name' => $name, 'email'=> $email] );
        return view( 'dashboard.dashboard', compact( 'name' , 'email' ) );
    }

    function profile( Request $request, $id = 0 ) {
        $page    = $request->get('page', 10);
        $orderBy = $request->get('order', 'asc');
        return view( 'dashboard.profile', compact( 'id', 'page', 'orderBy' ) );
    }

    function addProfile() {
        return response()->json([
            'success' => true,
            'message' => 'Profile added successfully',
            'name'    => 'Sabbir Hossain',
            'email'   => 'sabbir2dev@gmail.com',
        ]);
    }

    function uploadFiles( Request $request ) {
        $attachment           =  $request->file( 'attachment' );

        // Attachment Details.
        $attachmentSize       = $attachment->getSize();
        $attachmentType       = $attachment->getType();
        $attachmentName       = $attachment->getClientOriginalName();
        $attachmentFilename   = $attachment->getFilename();
        $attachmentExtension  = $attachment->getClientOriginalExtension();
        $attachmentExtension2 = $attachment->extension();

        // Upload Attachment.
        $attachment->storeAs('uploads', $attachment->getClientOriginalName() );
        $attachment->move( public_path( 'uploads/' ), $attachment->getClientOriginalName() );

        return array(
            'success'              => true,
            'message'              => 'File uploaded successfully',
            'attachmentSize'       => $attachmentSize,
            'attachmentType'       => $attachmentType,
            'attachmentName'       => $attachmentName,
            'attachmentExtension'  => $attachmentExtension,
            'attachmentExtension2' => $attachmentExtension2,
            'attachmentFilename'   => $attachmentFilename,
        );
    }

    function contentType( Request $request ) {
        if( $request->accepts(['application/json']) ){
            return array( 'message' => 'Acceptable' );
        } else {
            return array( 'message' => 'Not Acceptable' );
        }
//        return $request->getAcceptableContentTypes();
    }

    function setCookies( Request $request ) {
        $cookieName = "pluginmagnet";
        $value = 'username';
        $duration = 3600;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httponly = true;
//        return $request->cookie();
        return response('Home Page' )->cookie( $cookieName, $value, $duration, $path, $domain, $secure, $httponly );
    }
}
