@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-6" style="color: #816B77;">Privacy Policy</h2>

        <div class="rounded-lg shadow-md p-6" style="background-color: white;">
            <div class="text-black space-y-6">

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">1. General Information</h3>
                    <p>This privacy policy provides information about the collection and processing of personal data by this website (Power by Eszti).</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">2. Data Controller</h3>
                    <p><strong>Name:</strong> Power by Eszti</p>
                    <p><strong>Email:</strong> iliaakos@gmail.com</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">3. What Data Do We Collect?</h3>
                    <p>When completing the appointment booking form, we request the following information:</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Name</li>
                        <li>Phone number</li>
                        <li>Email address</li>
                        <li>Date of appointment</li>
                        <li>Time of appointment</li>
                        <li>Additional notes or concerns (optional)</li>
                    </ul>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">4. Purpose of Data Processing</h3>
                    <p>We use your data exclusively for the following purposes:</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Recording and managing appointment bookings</li>
                        <li>Communicating with clients about their appointments</li>
                        <li>Sending email notifications regarding bookings</li>
                        <li>Improving our services based on feedback</li>
                    </ul>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">5. Cookie Usage</h3>
                    <p>This website uses the following cookies:</p>

                    <div class="ml-4 mt-3 space-y-3">
                        <div>
                            <p class="font-semibold">Essential Functional Cookies:</p>
                            <ul class="list-disc list-inside ml-4 space-y-1">
                                <li><strong>laravel_session</strong> - Used for session identification (valid for 2 hours)</li>
                                <li><strong>XSRF-TOKEN</strong> - Security protection against CSRF attacks on forms</li>
                            </ul>
                        </div>

                        <div>
                            <p class="font-semibold">Third-Party Cookies:</p>
                            <ul class="list-disc list-inside ml-4 space-y-1">
                                <li><strong>Google reCAPTCHA</strong> - Bot protection and spam prevention on forms (if implemented)</li>
                            </ul>
                        </div>
                    </div>

                    <p class="mt-3">Cookie consent appears on your first visit to the website. You can accept or decline cookies. Your choice can only be modified later by clearing your browser's cookie settings.</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">6. Data Sharing</h3>
                    <p>We do not share your data with third parties, except for:</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Email service provider - for sending appointment confirmation emails</li>
                        <li>Google reCAPTCHA service - for bot protection purposes (if implemented)</li>
                        <li>Hosting provider - for storing data securely on our servers</li>
                    </ul>
                    <p class="mt-2">We will never sell, rent, or trade your personal information to third parties for marketing purposes.</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">7. Data Security</h3>
                    <p>We protect your data using the following security measures:</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Encrypted data transmission (HTTPS in production environment)</li>
                        <li>Secure database storage with access controls</li>
                        <li>Bot protection (reCAPTCHA if implemented)</li>
                        <li>Rate limiting to prevent spam and abuse</li>
                        <li>Regular security updates and monitoring</li>
                    </ul>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">8. Your Rights</h3>
                    <p>Under GDPR and applicable data protection laws, you have the right to:</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li><strong>Access</strong> - Request information about your personal data we hold</li>
                        <li><strong>Rectification</strong> - Request correction of inaccurate or incomplete data</li>
                        <li><strong>Erasure</strong> - Request deletion of your personal data ("right to be forgotten")</li>
                        <li><strong>Restriction</strong> - Request limitation of processing of your data</li>
                        <li><strong>Data Portability</strong> - Receive your data in a structured, commonly used format</li>
                        <li><strong>Object</strong> - Object to processing of your personal data</li>
                        <li><strong>Withdraw Consent</strong> - Withdraw consent at any time (e.g., newsletter subscriptions)</li>
                        <li><strong>Lodge a Complaint</strong> - File a complaint with the supervisory authority</li>
                    </ul>
                    <p class="mt-2">To exercise any of these rights or for data protection inquiries, please contact us at <strong>iliaakos@gmail.com</strong>.</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">9. Data Retention</h3>
                    <p>We retain appointment-related data for as long as necessary to fulfill the purposes outlined in this policy and in accordance with legal requirements. Specifically:</p>
                    <ul class="list-disc list-inside ml-4 space-y-1">
                        <li>Appointment data: Retained for 1 year after the appointment date for record-keeping purposes</li>
                        <li>Communication records: Retained for the duration of our business relationship</li>
                        <li>Newsletter subscriptions: Retained until you unsubscribe</li>
                    </ul>
                    <p class="mt-2">After the retention period expires, we will securely delete or anonymize your personal data.</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">10. Children's Privacy</h3>
                    <p>Our services are not intended for individuals under the age of 18. We do not knowingly collect personal information from children. If you believe we have collected data from a child, please contact us immediately.</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">11. Changes to This Policy</h3>
                    <p>We may update this privacy policy from time to time to reflect changes in our practices or legal requirements. We will notify you of any significant changes by posting the updated policy on this page with a new "Last Updated" date.</p>
                </section>

                <section>
                    <h3 class="text-2xl font-semibold mb-3" style="color: #816B77;">12. Contact Us</h3>
                    <p>If you have any questions or concerns about this privacy policy or our data practices, please contact us:</p>
                    <p class="mt-2"><strong>Email:</strong> <a href="mailto:iliaakos@gmail.com" class="underline hover:opacity-70" style="color: #816B77;">iliaakos@gmail.com</a></p>
                    <p class="mt-2">We will respond to your inquiry within 30 days.</p>
                </section>

                <section class="border-t pt-4 mt-6">
                    <p class="text-sm text-gray-600"><strong>Last Updated:</strong> {{ date('F j, Y') }}</p>
                    <p class="text-xs text-gray-500 mt-2">This privacy policy is compliant with the General Data Protection Regulation (GDPR) and applicable data protection laws.</p>
                </section>

            </div>
        </div>
    </div>
@endsection
