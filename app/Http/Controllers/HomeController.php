<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    //

    public function index(Request $request, $id = null) {

        $role = Auth::user()->role;
        $admins = User::where( 'role', 1 )->get();

        if ( $role == '1' ) {
            
            if ( $id ) {
                User::destroy( $id );
                return redirect('/redirects')->with( 'success', 'Item deleted successfully' );
            }
            return view( 'admin.dashboard', compact( 'admins' ) );

        } else {
            // user
            return view( 'dashboard' );
        }
    }

    public function registeredUser(Request $request, $id = null) {
        $role = Auth::user()->role;
        $users = User::where( 'role', 0 )->get();
        if ( $role == '1' ) {
            if ( $id ) {
                User::destroy( $id );
                return redirect('redirects/users')->with( 'success', 'Item deleted successfully' );
            }
            // admin
            return view( 'admin.registered-user', compact( 'users' ) );
        } else {
            // user
            return view( 'dashboard' );
        }
    }

    public function bookingList() {
        $role = Auth::user()->role;
        $bookings = Booking::all();
        if ( $role == '1' ) {
            // admin
            return view( 'admin.bookings', compact( 'bookings' ) );
        } else {
            // user
            return view( 'dashboard' );
        }
    }

    public function petsMedicalHistory() {
        $role = Auth::user()->role;
        $bookings = Booking::all();
        if ( $role == '1' ) {
            // admin
            return view( 'admin.pet-medical-history', compact( 'bookings' ) );
        } else {
            // user
            return view( 'dashboard' );
        }
    }


    public function viewMedicalHistory(Request $request, $id = null) {
        $role = Auth::user()->role;
        $bookings = Booking::all();
        if ( $role == '1' ) {
            // admin
            return view( 'admin.view-medical-history', compact( 'bookings' ) );
        } else {
            // user
            return view( 'dashboard' );
        }
    }
}
