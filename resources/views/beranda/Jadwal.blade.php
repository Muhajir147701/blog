@extends('layouts.appluar')

@section('content')
<div class="content-1">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title ">Jadwal & Kalender Pendidikan </h5>
            <h6 class="card-subtitle mb-2 text-muted">Kalender Pendidikan 2020-2021</h6>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kalender</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <!-- Calender -->
            <!-- <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap">
                <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                    <div class="fc-toolbar-chunk">
                        <div class="btn-group"><button class="fc-prev-button btn btn-primary" type="button"
                                aria-label="prev"><span class="fa fa-chevron-left"></span></button><button
                                class="fc-next-button btn btn-primary" type="button" aria-label="next"><span
                                    class="fa fa-chevron-right"></span></button></div><button disabled=""
                            class="fc-today-button btn btn-primary" type="button">today</button>
                    </div>
                    <div class="fc-toolbar-chunk">
                        <h2 class="fc-toolbar-title">June 2021</h2>
                    </div>
                    <div class="fc-toolbar-chunk">
                        <div class="btn-group"><button class="fc-dayGridMonth-button btn btn-primary active"
                                type="button">month</button><button class="fc-timeGridWeek-button btn btn-primary"
                                type="button">week</button><button class="fc-timeGridDay-button btn btn-primary"
                                type="button">day</button></div>
                    </div>
                </div>
                <div class="fc-view-harness fc-view-harness-active" style="height: 300px;">
                    <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                        <table class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                            <thead>
                                <tr class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                    <td>
                                        <div class="fc-scroller-harness">
                                            <div class="fc-scroller" style="overflow: hidden;">
                                                <table class="fc-col-header " style="width: 795px;">
                                                    <colgroup></colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                        class="fc-col-header-cell-cushion ">Sun</a>
                                                                </div>
                                                            </th>
                                                            <th class="fc-col-header-cell fc-day fc-day-mon">
                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                        class="fc-col-header-cell-cushion ">Mon</a>
                                                                </div>
                                                            </th>
                                                            <th class="fc-col-header-cell fc-day fc-day-tue">
                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                        class="fc-col-header-cell-cushion ">Tue</a>
                                                                </div>
                                                            </th>
                                                            <th class="fc-col-header-cell fc-day fc-day-wed">
                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                        class="fc-col-header-cell-cushion ">Wed</a>
                                                                </div>
                                                            </th>
                                                            <th class="fc-col-header-cell fc-day fc-day-thu">
                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                        class="fc-col-header-cell-cushion ">Thu</a>
                                                                </div>
                                                            </th>
                                                            <th class="fc-col-header-cell fc-day fc-day-fri">
                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                        class="fc-col-header-cell-cushion ">Fri</a>
                                                                </div>
                                                            </th>
                                                            <th class="fc-col-header-cell fc-day fc-day-sat">
                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                        class="fc-col-header-cell-cushion ">Sat</a>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                    <td>
                                        <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                            <div class="fc-scroller fc-scroller-liquid-absolute"
                                                style="overflow: hidden auto;">
                                                <div class="fc-daygrid-body fc-daygrid-body-unbalanced "
                                                    style="width: 300px;">
                                                    <table class="fc-scrollgrid-sync-table"
                                                        style="width: 795px; height: 558px;">
                                                        <colgroup></colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                    data-date="2021-05-30">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">30</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"
                                                                            style="padding-bottom: 25px;">
                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                style="right: -226px;"><a
                                                                                    class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-end fc-event-past"
                                                                                    style="border-color: rgb(243, 156, 18); background-color: rgb(243, 156, 18);">
                                                                                    <div class="fc-event-main">
                                                                                        <div
                                                                                            class="fc-event-main-frame">
                                                                                            <div class="fc-event-time">
                                                                                                12a</div>
                                                                                            <div
                                                                                                class="fc-event-title-container">
                                                                                                <div
                                                                                                    class="fc-event-title fc-sticky">
                                                                                                    Long Event</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                    data-date="2021-05-31">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">31</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"
                                                                            style="padding-bottom: 25px;"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                    data-date="2021-06-01">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">1</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness"
                                                                                style="margin-top: 25px;"><a
                                                                                    class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past"
                                                                                    style="border-color: rgb(245, 105, 84); background-color: rgb(245, 105, 84);">
                                                                                    <div class="fc-event-main">
                                                                                        <div
                                                                                            class="fc-event-main-frame">
                                                                                            <div
                                                                                                class="fc-event-title-container">
                                                                                                <div
                                                                                                    class="fc-event-title fc-sticky">
                                                                                                    All Day Event</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                    data-date="2021-06-02">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">2</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                    data-date="2021-06-03">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">3</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-today "
                                                                    data-date="2021-06-04">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">4</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness"><a
                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today">
                                                                                    <div class="fc-daygrid-event-dot"
                                                                                        style="border-color: rgb(0, 115, 183);">
                                                                                    </div>
                                                                                    <div class="fc-event-time">10:30a
                                                                                    </div>
                                                                                    <div class="fc-event-title">Meeting
                                                                                    </div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-event-harness"><a
                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today">
                                                                                    <div class="fc-daygrid-event-dot"
                                                                                        style="border-color: rgb(0, 192, 239);">
                                                                                    </div>
                                                                                    <div class="fc-event-time">12p</div>
                                                                                    <div class="fc-event-title">Lunch
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                    data-date="2021-06-05">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">5</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness"><a
                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot"
                                                                                        style="border-color: rgb(0, 166, 90);">
                                                                                    </div>
                                                                                    <div class="fc-event-time">7p</div>
                                                                                    <div class="fc-event-title">Birthday
                                                                                        Party</div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                    data-date="2021-06-06">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">6</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                    data-date="2021-06-07">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">7</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                    data-date="2021-06-08">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">8</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                    data-date="2021-06-09">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">9</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                    data-date="2021-06-10">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">10</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                    data-date="2021-06-11">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">11</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                    data-date="2021-06-12">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">12</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                    data-date="2021-06-13">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">13</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                    data-date="2021-06-14">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">14</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                    data-date="2021-06-15">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">15</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                    data-date="2021-06-16">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">16</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                    data-date="2021-06-17">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">17</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                    data-date="2021-06-18">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">18</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                    data-date="2021-06-19">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">19</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                    data-date="2021-06-20">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">20</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                    data-date="2021-06-21">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">21</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                    data-date="2021-06-22">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">22</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                    data-date="2021-06-23">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">23</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                    data-date="2021-06-24">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">24</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                    data-date="2021-06-25">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">25</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                    data-date="2021-06-26">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">26</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                    data-date="2021-06-27">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">27</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                    data-date="2021-06-28">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">28</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness"><a
                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future"
                                                                                    href="https://www.google.com/">
                                                                                    <div class="fc-daygrid-event-dot"
                                                                                        style="border-color: rgb(60, 141, 188);">
                                                                                    </div>
                                                                                    <div class="fc-event-time">12a</div>
                                                                                    <div class="fc-event-title">Click
                                                                                        for Google
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                    data-date="2021-06-29">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">29</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                    data-date="2021-06-30">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">30</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                    data-date="2021-07-01">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">1</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                    data-date="2021-07-02">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">2</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                    data-date="2021-07-03">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">3</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other"
                                                                    data-date="2021-07-04">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">4</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other"
                                                                    data-date="2021-07-05">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">5</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other"
                                                                    data-date="2021-07-06">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">6</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other"
                                                                    data-date="2021-07-07">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">7</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                    data-date="2021-07-08">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">8</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                    data-date="2021-07-09">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">9</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                    data-date="2021-07-10">
                                                                    <div
                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a
                                                                                class="fc-daygrid-day-number">10</a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-events"></div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->

            <!-- akhirCalendar -->

            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>

@endsection