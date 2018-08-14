@extends('locme::layout')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Translate Model</h5>
                    <div class="form-group">
                        <label for="models">Models</label>
                        <select name="models" id="models" class="form-control">
                            @foreach($models as $model)
                                <option>{{ $model }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary btn-block">Translate</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Translate URL</h5>
                    <div class="form-group">
                        <label for="path">Path</label>
                        <input type="text" name="path" id="path" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-block">Scan</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="translationTab" role="tablist">
                        <li class="nav-item">
                            <a href="#EN" class="nav-link active" id="EN-tab" data-toggle="tab"
                                role="tab" aria-controls="en" aria-selected="true">
                                EN
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#JP" class="nav-link" id="JP-tab" data-toggle="tab"
                                role="tab" aria-controls="jp" aria-selected="false">
                                JP
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#ID" class="nav-link" id="ID-tab" data-toggle="tab"
                                role="tab" aria-controls="id" aria-selected="false">
                                ID
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="translationTabContent">
                        <div class="tab-pane fade show active" id="EN" role="tabpanel" aria-labelledby="en-tab">
                            EN
                        </div>
                        <div class="tab-pane fade" id="JP" role="tabpanel" aria-labelledby="jp-tab">
                            JP
                        </div>
                        <div class="tab-pane fade" id="ID" role="tablpanel" aria-labelledby="id-tab">
                            ID
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop