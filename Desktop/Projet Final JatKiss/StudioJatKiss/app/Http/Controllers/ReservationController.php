<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Prestation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Obtenez l'utilisateur connecté
    $user = Auth::user();

    // Assurez-vous que l'utilisateur est connecté
    if (!$user) {
        // Redirigez l'utilisateur vers la page de connexion s'il n'est pas connecté
        return redirect()->route('login');
    }

      // Vérifiez le rôle de l'utilisateur connecté
      if ($user->role_id === 1) {
        // L'utilisateur est un administrateur, récupérez toutes les réservations
        $reservations = Reservation::all();
    } else {
        // L'utilisateur n'est pas administrateur, récupérez les réservations de l'utilisateur connecté
        $reservations = Reservation::where('user_id', $user->id)->get();
    }

    // Affichez la page 'viewResa' en passant les réservations comme variable
    return view('viewResa', compact('reservations'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('resa'); // Assurez-vous que le nom de vue correspond à votre fichier resa.blade.php   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Récupérez l'utilisateur correspondant au pseudo
         $user = User::where('pseudo', $request->pseudo)->firstOrFail();

         // Recherchez la prestation correspondant à la sélection de l'utilisateur
         $prestation = Prestation::where('nom', $request->session_type)->firstOrFail();
 
 
         // Si l'utilisateur existe, enregistrez la réservation avec l'ID de l'utilisateur
         if ($user) {
 
             // Créer une nouvelle réservation
             $reservations = new reservation();
             $reservations->user_id = $user->id;
             $reservations->prestation_id  = $prestation->id;
             $reservations->date = $request->input('date');
             $reservations->timeD = $request->input('timeD');
             $reservations->timeF = $request->input('timeF');
 
             // Enregistrer la réservation dans la base de données
             $reservations->save();
 
             // Vous pouvez rediriger l'utilisateur vers une page de confirmation ici
             return redirect()->route('confirmation');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {        
                 return view('edit', compact('reservation'));

    }

    /*         dd($reservations); //AFFICHER BDD
                */
        

    public function update(Request $request,Reservation $reservation)
    {
        // Obtenez l'utilisateur connecté
        $user = Auth::user();
        
        // Assurez-vous que la réservation existe et qu'elle appartient à l'utilisateur connecté
        if ($reservation && $reservation->user_id === $user->id) {
            // Mettez à jour la réservation ici en utilisant les données du formulaire
            $reservation->date = $request->input('date');
            $reservation->timeD = $request->input('timeD');
            $reservation->timeF = $request->input('timeF');
            // ... d'autres mises à jour
    
            $reservation->save();
    
            // Redirigez l'utilisateur vers une autre page, par exemple la liste des réservations
            return redirect()->route('confirmation');
        } else {
            // Redirigez l'utilisateur vers une autre page, par exemple la liste des réservations
            return redirect()->route('notFound');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {        
            // Assurez-vous que la réservation existe
            if ($reservation) {
                $reservation->delete();
            }
        
            // Redirigez l'utilisateur vers une autre page, par exemple la liste des réservations
            return redirect()->route('confirmation');
        }
    }
