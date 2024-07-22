@extends('admin.layout.layout')

@section('PageTitle', 'Admin - Manage Course')
@section("NavbarTitle", "Manage Course")
@section('CourseActive', "active")

@section('Content')
    <div class="card shadow-sm w-100 px-3">
        <div class="card-header d-flex justify-content-between pt-4 fs-5 fw-bold">
            Total Course ({{$count}})
            <button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#CreateCourse">Create</button>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Speaker</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($courseData as $item)
                        <tr>
                            <th scope="row"> {{$item->cId}} </th>
                            <td> {{$item->title}} </td>
                            <td> {{$item->nama}} </td>
                            <td> {{$item->description}} </td>
                            <td>
                                <div class="d-flex flex-row justify-content-between btn-group py-2 gap-2" role="group" aria-label="Action">
                                    <button type="button" class="btn btn-sm btn-edit" data-bs-toggle="modal" data-bs-target="#EditCourse">EDIT</button>
                                    <form onsubmit="" action="" method="">
                                        {{-- @csrf
                                        @method('DELETE') --}}
                                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No Course Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex flex-col justify-content-end align-items-center">
            {{ $courseData->links() }}
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="CreateCourse" tabindex="-1" aria-labelledby="CreateCourseLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content px-3 py-1">
            <div class="modal-header">
            <h3 class="modal-title" id="CreateCourseLabel">Create Course</h3>
            </div>
            <div class="modal-body">
            <!-- Content -->
                <form action="{{ route() }}" method="POST" enctype="multipart/form-data">
                    <!-- token form -->
                    @csrf
                    <div class="mb-3">
                        <label for="courseName">Course Title</label>
                        <input type="text" name="courseName" id="courseName" class="form-control @error('courseName') is-invalid @enderror" required>
                        <!-- error message -->
                        @error('courseName')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="courseDesc">Course Description</label>
                        <textarea name="courseDesc" id="courseDesc" class="form-control @error('courseDesc') is-invalid @enderror" required>
                        </textarea>
                        <!-- error message -->
                        @error('courseDesc')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <h5>Course Detail</h5>
                    <div class="mb-3">
                        <label for="speakers">Speaker Name</label>
                        <select id="speakers" name="speakers" class="form-control @error('speakers') is-invalid @enderror" required>
                            <option value="" selected>--- Choose ---</option>
                            @foreach ($speakerData as $item)
                            <option value="{{ $item->id }}" {{ old('speakers')== $item->id ? 'selected':''  }}>{{ $item->nama }}</option>
                            @endforeach

                        </select>

                        <!-- error message -->
                        @error('speakers')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="courseImage">Course Image</label>
                        <input type="file" id="courseImage" name="courseImage" value="{{ old('courseImage') }}" class="form-control @error('courseImage') is-invalid @enderror" required>

                        <!-- error message untuk password -->
                        @error('courseImage')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <h5> Course Material </h5>
                    <div class="d-flex flex-column">
                        <h6>Week 1</h6>
                        <div class="d-flex flex-column">
                            <div class="mb-3">
                                <label for="courseWeek1Title">Title</label>
                                <input type="text" name="courseWeek1Title" id="courseWeek1Title" class="form-control @error('courseWeek1Title') is-invalid @enderror" required>
                                <!-- error message -->
                                @error('courseWeek1Title')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek1Video">Video</label>
                                <input type="url" id="courseWeek1Video" name="courseWeek1Video" value="{{ old('courseWeek1Video') }}" class="form-control @error('courseWeek1Video') is-invalid @enderror" required>

                                <!-- error message untuk password -->
                                @error('courseWeek1Video')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek1Desc">Description</label>
                                <textarea name="courseWeek1Desc" id="courseWeek1Desc" class="form-control @error('courseWeek1Desc') is-invalid @enderror" required>

                                </textarea>
                                <!-- error message -->
                                @error('courseWeek1Desc')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h6>Week 2</h6>
                        <div class="d-flex flex-column">
                            <div class="mb-3">
                                <label for="courseWeek2Title">Title</label>
                                <input type="text" name="courseWeek2Title" id="courseWeek2Title" class="form-control @error('courseWeek2Title') is-invalid @enderror" required>
                                <!-- error message -->
                                @error('courseWeek2Title')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek2Video">Video</label>
                                <input type="url" id="courseWeek2Video" name="courseWeek2Video" value="{{ old('courseWeek2Video') }}" class="form-control @error('courseWeek2Video') is-invalid @enderror" required>

                                <!-- error message untuk password -->
                                @error('courseWeek2Video')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek2Desc">Description</label>
                                <textarea name="courseWeek2Desc" id="courseWeek2Desc" class="form-control @error('courseWeek2Desc') is-invalid @enderror" required>

                                </textarea>
                                <!-- error message -->
                                @error('courseWeek2Desc')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h6>Week 3</h6>
                        <div class="d-flex flex-column">
                            <div class="mb-3">
                                <label for="courseWeek3Title">Title</label>
                                <input type="text" name="courseWeek3Title" id="courseWeek3Title" class="form-control @error('courseWeek3Title') is-invalid @enderror" required>
                                <!-- error message -->
                                @error('courseWeek3Title')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek3Video">Video</label>
                                <input type="url" id="courseWeek3Video" name="courseWeek3Video" value="{{ old('courseWeek3Video') }}" class="form-control @error('courseWeek3Video') is-invalid @enderror" required>

                                <!-- error message untuk password -->
                                @error('courseWeek3Video')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek3Desc">Description</label>
                                <textarea name="courseWeek3Desc" id="courseWeek3Desc" class="form-control @error('courseWeek3Desc') is-invalid @enderror" required>

                                </textarea>
                                <!-- error message -->
                                @error('courseWeek3Desc')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h6>Week 4</h6>
                        <div class="d-flex flex-column">
                            <div class="mb-3">
                                <label for="courseWeek4Title">Title</label>
                                <input type="text" name="courseWeek4Title" id="courseWeek4Title" class="form-control @error('courseWeek4Title') is-invalid @enderror" required>
                                <!-- error message -->
                                @error('courseWeek4Title')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek4Video">Video</label>
                                <input type="url" id="courseWeek4Video" name="courseWeek4Video" value="{{ old('courseWeek4Video') }}" class="form-control @error('courseWeek4Video') is-invalid @enderror" required>

                                <!-- error message untuk password -->
                                @error('courseWeek4Video')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="courseWeek4Desc">Description</label>
                                <textarea name="courseWeek4Desc" id="courseWeek4Desc" class="form-control @error('courseWeek4Desc') is-invalid @enderror" required>

                                </textarea>
                                <!-- error message -->
                                @error('courseWeek4Desc')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="EditCourse" tabindex="-1" aria-labelledby="EditCourseLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="EditCourseLabel">Edit Course</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <!-- Content -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-edit">Edit</button>
            </div>
        </div>
        </div>
    </div>
@endsection
