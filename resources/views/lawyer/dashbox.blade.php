<div class="col col-lg-3" style = "border-width:1px; border-style:groove;padding:15px;">                     
                        <div class="card">
                           <center><h3>My Dashboard</h3></center>
                           <hr>
                           <center><img class="card-img-top" src="{{ asset('uploads/pictures/user/'. Auth::user()->photo ) }}" alt="Card image" width="100" height="100" style="border-radius: 20px;"></center>
                           <hr>
                         <div class="card-body">
                           <center>
                               <h3 class="card-title">{{ $lawyer->name }}</h3>
                               <h4>{{ $lawyer->type_of_lawyer }}</h4>
                               <h5> {{ $lawyer->email }}</h5>
                               <p> {{ $lawyer->phone }}</p>
                           <hr>
                            <a href="{{ route('lawyer.dashboard') }}" style="font-size: 20px;">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                              </svg> 
                               &nbsp&nbspMy Appointments
                           </a>
                           <hr>
                            <a href="#" style="font-size: 20px;">
                              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                 <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              </svg> 
                               &nbsp&nbsp Clients
                           </a>
                           <hr>
                           <a href=" {{ route('lawyer.profile') }}" style="font-size: 20px;">
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                               </svg> 
                               &nbsp&nbspEdit Profile
                           </a>
                           <hr>
                           <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="font-size: 20px;">
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-power" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                                   <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                               </svg>
                               <i class="icon_key_alt"></i>
                                        &nbsp&nbspLog Out</a>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                            </form>
                         </center>
                         </div>
                     </div>
                    </div>
                    