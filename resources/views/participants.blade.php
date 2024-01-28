@foreach ($participants as $participant)
<div class="flex flex-col my-1">
    <div class=" bg-[#97daf8] p-2 space-y-2 rounded-lg shadow-md">
        @csrf
        <input type="hidden" name="participant_id" value="{{$participant->id}}">
        <div>
            <label for="">Nama :</label>
            <input type="text" id="participant{{$participant->id}}" name="name" value="{{$participant->name}}" id="" class="p-1 rounded-md">
        </div>
        <div>
            <label for="">Kartu Pelajar : </label>
            <input type="file" name="file" id="">
        </div>

        <input type="button" onclick="SaveParticipant('{{csrf_token()}}', {{$participant->id}})" value="Submit" class=" bg-[#a5ce45] py-1 px-2 rounded">
        <input type="button" onclick="DeleteParticipant('{{csrf_token()}}',{{$participant->id}})" value="Hapus Peserta" class="bg-red-400 py-1 px-2 rounded">
    </div>
</div>
@endforeach