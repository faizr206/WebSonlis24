@foreach ($participants as $participant)
    <div class="flex flex-col my-1">
        <div class=" bg-[#d4e0f2] p-2 mx-[100px] space-y-2 rounded-lg shadow-md">
            @csrf
            <input type="hidden" name="participant_id" value="{{ $participant->id }}">
            <div class="flex flex-col space-y-2 items-center justify-center">
                {{-- <label for="">Nama :</label> --}}
                <input type="text" id="participant{{ $participant->id }}" name="name"
                    placeholder="Masukkan Nama Peserta" value="{{ $participant->name }}"
                    class="p-1 rounded-md w-1/2 mx-1">

                @if (Auth::user()->lomba == 'Mobile Legend')
                    <input type="text" id="idAkun{{ $participant->id }}" name="idAkun"
                        placeholder="Masukkan ID Akun" value="{{ $participant->idAkun }}"
                        class="p-1 rounded-md w-1/2 mx-1">
                    <input type="text" id="nicknameAkun{{ $participant->id }}" name="nicknameAkun"
                        placeholder="Masukkan Nickname Akun" value="{{ $participant->nicknameAkun }}"
                        class="p-1 rounded-md w-1/2 mx-1">
                @else
                    <input style="display: none" type="text" id="idAkun{{ $participant->id }}" name="idAkun"
                        placeholder="Masukkan ID Akun" value="{{ $participant->idAkun }}"
                        class="p-1 rounded-md w-1/2 mx-1">
                    <input style="display: none" type="text" id="nicknameAkun{{ $participant->id }}"
                        name="nicknameAkun" placeholder="Masukkan Nickname Akun"
                        value="{{ $participant->nicknameAkun }}" class="p-1 rounded-md w-1/2 mx-1">
                @endif
            </div>
            <div class="flex items-center justify-center space-x-1">
                <button onclick="SaveParticipant('{{ csrf_token() }}', {{ $participant->id }})" value="Submit"
                    class=" bg-[#96c13d] cursor-pointer hov py-1 text-white px-2 rounded-lg">
                    <i class="fa-solid fa-circle-check"></i>
                </button>
                <button onclick="DeleteParticipant('{{ csrf_token() }}',{{ $participant->id }})"
                    value="Hapus Peserta" class="bg-[#c05437] text-white hov py-1 px-2 rounded-lg cursor-pointer">
                    <i class="fa-solid fa-circle-xmark"></i>
                </button>
            </div>
        </div>
    </div>
@endforeach
