@extends('layouts.app')

@section('content')
    <div id="table-view"
         class="mx-0.5  md:flex lg:flex xl:flex 2xl:flex justify-center py-5 ">
        <div
            class="md:w-10/12 lg:w-10/12 xl:w-10/12 2xl:w-10/12 shadow overflow-hidden rounded border-b border-gray-200">
            <div class="table min-w-full bg-white">
                <div class="table-header-group bg-blue-900 text-white">
                    <div
                        class="table-cell text-left md:table-cell lg:table-cell xl:table-cell 2xl:table-cell py-3 px-3 uppercase font-semibold text-sm">
                        Member
                    </div>
                </div>
                <div class="table-row-group w-full text-gray-700">
                    @forelse($loans as $loan)
                        <div class="table-row w-full">
                            <div class="table-cell">
                                {{ $loan->user->name }}
                            </div>
                            @empty
                                No loans
                            @endforelse
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
