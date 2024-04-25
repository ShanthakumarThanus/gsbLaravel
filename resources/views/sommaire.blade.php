@extends ('modeles/visiteur')
    @section('menu')
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
               <ul id="menuList">
                   <li >
                    <!-- @if(session('visiteur')) -->
                      <strong>Bonjour {{ $visiteur['nom'] . ' ' . $visiteur['prenom'] }}</strong>
                    <!-- @elseif(session('gestionnaire'))
                    <strong>Bonjour {{ $gestionnaire['nom'] . ' ' . $gestionnaire['prenom'] }}</strong> </br>
                    <strong>(Profil Gestionnaire)</strong>
                    @endif -->
                   </li>
                  <li class="smenu">
                     <a href="{{ route('chemin_gestionFrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>
                  </li>
                  <li class="smenu">
                    <a href="{{ route('chemin_selectionMois') }}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
                  </li>
                  <!-- @if(session('gestionnaire')) -->
                  <li class="smenu">
                    <a href="{{ route('chemin_voirVisiteur') }}" title="Gérer les visiteurs">Gérer les visiteurs 2.A</a>
                  </li>
                  <!-- @endif -->
                  <!-- <li class="smenu">
                    <a href="{{ route('chemin_formulaireFicheFrais') }}" title="Valider fiche frais">Valider une fiche frais 2.B</a>
                  </li> -->
               <li class="smenu">
                <a href="{{ route('chemin_deconnexion') }}" title="Se déconnecter">Déconnexion</a>
                  </li>
                </ul>
               
        </div>
    @endsection