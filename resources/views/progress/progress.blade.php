@extends('layouts.layout')

@section('head-title')
    Progress
@endsection

@section('content')
    <div class="progress_page __container">
        <p class="big_text page_title">PROGRESS</p>
        <p class="normal_plus_text page_center_title">Target weight: 70 kg</p>
        <div class="progress__weight_bar_container weight_bar_container">
            <p class="normal_text weight_bar_text">70 кг</p>
            <div class="progress__weight_bar_wrapper weight_bar_wrapper">
                <div class="progress__empty_bar progress__bar"></div>
                <div class="progress__fill_bar progress__bar"></div>
            </div>
            <p class="normal_text weight_bar_text">80 кг</p>
        </div>
        <div class="progress__blocks">
            <div class="progress__series_block block">
                <div class="progress__series_first_block">
                    <p class="normal_plus_text page_center_title">Series</p>
                </div>
                <div class="progress__series_last_block">
                    <div class="progress__series_first_section progress__series_section">
                        <div class="progress__series_text_wrapper">
                            <p class="normal_plus_text page_center_title progress__series_text">1 day</p>
                            <p class="normal_plus_text page_center_title">The current series</p>
                        </div>
                    </div>
                    <div class="progress__series_last_section progress__series_section">
                        <div class="progress__series_text_wrapper">
                            <p class="normal_plus_text page_center_title progress__series_text">1 day</p>
                            <p class="normal_plus_text page_center_title">The best series</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="progress__weight_block block">
                <p class="normal_plus_text page_center_title">Current weight: 50 kg</p>
                <div class="progress__weight_wrapper">
                    <div class="progress__weight_text_wrapper">
                        <p class="normal_text">55 kg</p>
                        <p class="normal_text">50 kg</p>
                        <p class="normal_text">45 kg</p>
                    </div>
                    <div class="progress__weight_graph_wrapper"></div>
                </div>
                    
                    <div class="progress__weight_text_down_wrapper">
                        <p class="normal_text">55 kg</p>
                        <p class="normal_text">50 kg</p>
                        <p class="normal_text">45 kg</p>
                    </div>
                
            </div>
        </div>
    </div>
@endsection
