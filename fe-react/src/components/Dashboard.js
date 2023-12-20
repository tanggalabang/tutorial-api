// src/components/Dashboard.js
import React from 'react';

import Layout from './layouting/Layout';

const Dashboard = ({ user, onLogout }) => {
    return (
        <Layout user={user} onLogout={onLogout}>
            {/* <h1>Welcome, {user.name}</h1> */}

            <main>
                {/* <!-- S: Header --> */}
                <header class="jumbotron">
                    <div class="container">
                        <h1 class="display-4">Dashboard</h1>
                    </div>
                </header>
                {/* <!-- E: Header --> */}

                <div class="container">

                    {/* <!-- S: Data Validation Section --> */}
                    <section class="validation-section mb-5">
                        <div class="section-header mb-3">
                            <h4 class="section-title text-muted">My Data Validation</h4>
                        </div>
                        <div class="row">

                            {/* <!-- S: Link to Request Data Validation --> */}
                            <div class="col-md-4">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h5 class="mb-0">Data Validation</h5>
                                    </div>
                                    <div class="card-body">
                                        <a href="" class="btn btn-primary btn-block">+ Request validation</a>
                                    </div>
                                </div>
                            </div>
                            {/* <!-- E: Link to Request Data Validation --> */}

                            {/* <!-- S: Society Data Validation Box (Pending) --> */}
                            <div class="col-md-4">
                                <div class="card card-default">
                                    <div class="card-header border-0">
                                        <h5 class="mb-0">Data Validation</h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <table class="table table-striped mb-0">
                                            <tr>
                                                <th>Status</th>
                                                <td><span class="badge badge-info">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th>Job Category</th>
                                                <td class="text-muted">-</td>
                                            </tr>
                                            <tr>
                                                <th>Job Position</th>
                                                <td class="text-muted">Web Developer</td>
                                            </tr>
                                            <tr>
                                                <th>Reason Accepted</th>
                                                <td class="text-muted">-</td>
                                            </tr>
                                            <tr>
                                                <th>Validator</th>
                                                <td class="text-muted">-</td>
                                            </tr>
                                            <tr>
                                                <th>Validator Notes</th>
                                                <td class="text-muted">-</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {/* <!-- E: Society Data Validation Box (Pending) --> */}

                            {/* <!-- S: Society Data Validation Box (Accepted) --> */}
                            <div class="col-md-4">
                                <div class="card card-default">
                                    <div class="card-header border-0">
                                        <h5 class="mb-0">Data Validation</h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <table class="table table-striped mb-0">
                                            <tr>
                                                <th>Status</th>
                                                <td><span class="badge badge-success">Accepted</span></td>
                                            </tr>
                                            <tr>
                                                <th>Job Category</th>
                                                <td class="text-muted">Computing and ICT</td>
                                            </tr>
                                            <tr>
                                                <th>Job Position</th>
                                                <td class="text-muted">Programmer</td>
                                            </tr>
                                            <tr>
                                                <th>Reason Accepted</th>
                                                <td class="text-muted">I can work hard</td>
                                            </tr>
                                            <tr>
                                                <th>Validator</th>
                                                <td class="text-muted">Usman M.Ti</td>
                                            </tr>
                                            <tr>
                                                <th>Validator Notes</th>
                                                <td class="text-muted">siap kerja</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {/* <!-- E: Society Data Validation Box (Accepted) --> */}

                        </div>
                    </section>
                    {/* <!-- E: Data Validation Section --> */}

                    {/* <!-- S: List Job Seekers Section --> */}
                    <section class="validation-section mb-5">
                        <div class="section-header mb-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="section-title text-muted">My Job Applications</h4>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="btn btn-primary btn-lg btn-block">+ Add Job Applications</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-body">
                            <div class="row mb-4">

                                {/* <!-- S: Job Applications info --> */}
                                <div class="col-md-12">
                                    <div class="alert alert-warning">
                                        Your validation must be approved by validator to applying job.
                                    </div>
                                </div>
                                {/* <!-- E: Job Applications info --> */}

                                {/* <!-- S: Job Applications Box (Registered) --> */}
                                <div class="col-md-6">
                                    <div class="card card-default">
                                        <div class="card-header border-0">
                                            <h5 class="mb-0">PT. Maju Mundur Sejahtera</h5>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table table-striped mb-0">
                                                <tr>
                                                    <th>Address</th>
                                                    <td class="text-muted">Jln. HOS. Cjokroaminoto (Pasirkaliki) No. 900, DKI Jakarta</td>
                                                </tr>
                                                <tr>
                                                    <th>Position</th>
                                                    <td class="text-muted">
                                                        <ul>
                                                            <li>Desain Grafis <span class="badge badge-info">Pending</span></li>
                                                            <li>Programmer <span class="badge badge-info">Pending</span></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Apply Date</th>
                                                    <td class="text-muted">September 12, 2023</td>
                                                </tr>
                                                <tr>
                                                    <th>Notes</th>
                                                    <td class="text-muted">I was the better one</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {/* <!-- S: Job Applications Box (Registered) --> */}

                                {/* <!-- S: Job Applications Box (Registered) --> */}
                                <div class="col-md-6">
                                    <div class="card card-default">
                                        <div class="card-header border-0">
                                            <h5 class="mb-0">PT. Maju Mundur Sejahtera</h5>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table table-striped mb-0">
                                                <tr>
                                                    <th>Address</th>
                                                    <td class="text-muted">Jln. HOS. Cjokroaminoto (Pasirkaliki) No. 900, DKI Jakarta</td>
                                                </tr>
                                                <tr>
                                                    <th>Position</th>
                                                    <td class="text-muted">
                                                        <ul>
                                                            <li>Desain Grafis <span class="badge badge-success">Accepted </span></li>
                                                            <li>Programmer <span class="badge badge-danger">Rejected</span></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Apply Date</th>
                                                    <td class="text-muted">September 12, 2023</td>
                                                </tr>
                                                <tr>
                                                    <th>Notes</th>
                                                    <td class="text-muted">-</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                {/* <!-- S: Job Applications Box (Registered) --> */}

                            </div>

                        </div>
                    </section>
                    {/* <!-- E: List Job Seekers Section --> */}

                </div>

            </main >

        </Layout>
    );
};

export default Dashboard;
