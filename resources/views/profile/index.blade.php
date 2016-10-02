@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-1">
                <h3>Profiili</h3>
            </div>
            <div class="col-md-1 pull-right">
                <a href="{{ url('profile/edit') }}" class="btn btn-default" role="button">Edit</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
                <img id="profilePicture" src="storage/avatars/2.jpg" alt="Image not found!" />
            </div>

            <button class="btn btn-default" data-toggle="modal" data-target="#file-select">Vaihda</button>
        </div>

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2">
                    <label>Nimi:</label>
                </div>
                <div class="col-md-6">
                    <p>Jaska Jokunen</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label>Sähköposti:</label>
                </div>
                <div class="col-md-6">
                    <p>Jaska.Jokunen@sähköposti.fi</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="file-select" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Valitse uusi profiilikuva</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <label>Valittu kuva:</label>
                    </div>
                    <div class="col-md-4">
                        <label class="btn btn-default btn-file">
                            Selaa...<input id="file-selection" type="file" style="display: none;">
                        </label>
                    </div>
                    <div class="col-md-5">
                        <div id="preview" class="thumbnail hidden">
                            <img id="previewImg" src="" alt="Picture" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <form action="" id="uploadForm">
                        <input type="submit" class="btn btn-success" value="Tallenna"/>
                    </form>
                    <button class="btn btn-default" data-dismiss="modal">Sulje</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
