@extends('layout')

@section('content')
    <div class="hidden lg:block">
        {{--FIRST BLOCK--}}
        <div class="flex">
            <div class="w-1/5">
                <img src="{{ asset('images/man-in-the-office.jpg') }}" alt="Building" class="w-full h-full object-cover">
            </div>
            <div class="w-4/5 px-12 py-12">
                <h1 class="text-4xl mb-1 text-center">
                    Tax-saving tips
                </h1>
                <h3 class="mb-8 text-center">
                    Incorporate your business.
                </h3>
                <p class="text-left">
                    Incorporation is one of the most effective tax-savings tips for small businesses, if you can retain the profits in your
                    corporation. It could produce a sizable tax deferral by qualifying for the lower small business tax rate for active business income.
                    The deferral benefit is available for as long as the profits stay in the company.
                    <br>
                    <br>
                    The longer the profits are left in the company the larger the tax deferral. Investment and rental income  are taxed at the
                    genera tax rate.
                    <br>
                    <br>
                    Shares of Canadian controlled private corporations may be eligible for the lifetime capital gains exemption when sold.
                    <br>
                    <br>
                    However, if your corporation generates a loss, incorporation may not be the  best option, as losses would be trapped
                    in the corporation and not available as tax offsets for personal use.
                    <br>
                    <br>
                    Other potential advantages of incorporation include having family members own shares (so as to have access
                    to multiple capital gains exemptions) and paying out dividends to actively participating family members who
                    are taxed at a lower rate.
                </p>
            </div>
        </div>

        {{--SECOND BLOCK--}}
        <div class="flex mt-16">
            <div class="w-1/5 relative max-h-96">
                <p class="absolute -translate-y-full left-1/2 -translate-x-1/2 text-center">Recommended insight</p>
                <img src="{{ asset('images/idea-1.jpg') }}" alt="Building" class="w-full h-full object-cover ">
                <p class="absolute bottom-2 left-2 text-white">Tax benefits of incorporating <br> your small businesses</p>
            </div>

            <div class="w-4/5 px-12">
                <h3 class="mb-8 text-center">
                    Maximize tax break from RRSP.
                </h3>
                <p class="text-left">
                    Maximize tax break from RRSP in order to make the maximum allowable registered retirement savings plan
                    RRSP contribution next year, you’ll need to create the contribution room this year by maximizing reported
                    earned income.If incorporated, you will want to review the best dividend/salary mix for your personal situation.
                    <br>
                    <br>
                    As part of your overall plan, you might also make a contribution to your tax free savings account( TFSA)
                    It’s important to achieve a balance in your personal investment plan to ensure that it fits in with this year’s
                    maximum contribution limits for business owners.
                </p>
                <h3 class="my-8 text-center">
                    Prepare to sell your business.
                </h3>
                <p class="text-left">
                    If you are planning on selling all or parts of your business at some point confirm with your accountant whether
                    you’re eligible for the lifetime capital gains exemption and what steps need to be taken.
                </p>
            </div>
        </div>

        {{--THIRD BLOCK--}}
        <div class="flex mt-16">
            <div class="w-1/5 relative max-h-96">
                <p class="absolute translate-y-2 left-1/2 -translate-x-1/2 top-2 text-center">
                    Claim deduction <br>
                    <span class="text-white">if you work from home office</span>
                </p>
                <img src="{{ asset('images/job-done-1.jpg') }}" alt="Building" class="w-full h-full object-cover ">
            </div>

            <div class="w-4/5 px-12">
                <h3 class="mb-8 text-center">
                    Use Health Savings Accounts (HSAs)
                </h3>
                <p class="text-left">
                    Contribute to an HSA if you have a high-deductable health insurance plan.HSA contributions are tax-deductible, and the money can be used tax-free for qualified medical expenses.
                </p>
                <h3 class="my-8 text-center">
                    Charitable contributions
                </h3>
                <p class="text-left">
                    Donate to registered charities.You contributions may be tax-deductible, reducing your taxable income.
                </p>
                <h3 class="my-8 text-center">
                    Tax-loss harvesting
                </h3>
                <p class="text-left">
                    Offset capital gains by selling investments that have declined in value, thereby reducing your tax liability
                </p>
                <h3 class="my-8 text-center">
                    Utilize the gift tax exemption
                </h3>
                <p class="text-left">
                    You can gift a certain amount to individuals each year without incurring a gift tax.This can help reduce your
                    estate overall tax liability.
                </p>
                <h3 class="my-8 text-center">
                    Business deductions
                </h3>
                <p class="text-left">
                    If you are a business owner, ensure you’re taking full advantage of tax deductions related to your business expenses.
                </p>
                <h3 class="my-8 text-center">
                    Tax-efficient withdrawals
                </h3>
                <p class="text-left">
                    When you’re retired and withdrawing from your retirement accounts, plan your withdrawals to minimize the tax impact.Consider Roth conversion and other strategies
                </p>
                <h3 class="my-8 text-center">
                    Tax-Efficient Estate
                </h3>
                <p class="text-left">
                    Consult an estate planning attorney to structure your estate ia a way that minimizes estate taxes for you heirs.
                </p>
            </div>
        </div>
    </div>

    <div class="block lg:hidden">
        {{--FIRST BLOCK--}}
        <div>
            <img src="{{ asset('images/man-in-the-office.jpg') }}" alt="Building" class="w-full h-full object-cover">
            <div class="px-12 py-12">
                <h1 class="text-4xl mb-1 text-center">
                    Tax-saving tips
                </h1>
                <h3 class="mb-8 text-center">
                    Incorporate your business.
                </h3>
                <p class="text-left">
                    Incorporation is one of the most effective tax-savings tips for small businesses, if you can retain the profits in your
                    corporation. It could produce a sizable tax deferral by qualifying for the lower small business tax rate for active business income.
                    The deferral benefit is available for as long as the profits stay in the company.
                    <br>
                    <br>
                    The longer the profits are left in the company the larger the tax deferral. Investment and rental income  are taxed at the
                    genera tax rate.
                    <br>
                    <br>
                    Shares of Canadian controlled private corporations may be eligible for the lifetime capital gains exemption when sold.
                    <br>
                    <br>
                    However, if your corporation generates a loss, incorporation may not be the  best option, as losses would be trapped
                    in the corporation and not available as tax offsets for personal use.
                    <br>
                    <br>
                    Other potential advantages of incorporation include having family members own shares (so as to have access
                    to multiple capital gains exemptions) and paying out dividends to actively participating family members who
                    are taxed at a lower rate.
                </p>
            </div>
        </div>

        {{--SECOND BLOCK--}}
        <div class="mt-16">
            <img src="{{ asset('images/idea-1.jpg') }}" alt="Building" class="w-full h-full object-cover">

            <div class="px-12 mt-12">
                <h3 class="mb-8 text-center">
                    Maximize tax break from RRSP.
                </h3>
                <p class="text-left">
                    Maximize tax break from RRSP in order to make the maximum allowable registered retirement savings plan
                    RRSP contribution next year, you’ll need to create the contribution room this year by maximizing reported
                    earned income.If incorporated, you will want to review the best dividend/salary mix for your personal situation.
                    <br>
                    <br>
                    As part of your overall plan, you might also make a contribution to your tax free savings account( TFSA)
                    It’s important to achieve a balance in your personal investment plan to ensure that it fits in with this year’s
                    maximum contribution limits for business owners.
                </p>
                <h3 class="my-8 text-center">
                    Prepare to sell your business.
                </h3>
                <p class="text-left">
                    If you are planning on selling all or parts of your business at some point confirm with your accountant whether
                    you’re eligible for the lifetime capital gains exemption and what steps need to be taken.
                </p>
            </div>
        </div>

        {{--THIRD BLOCK--}}
        <div class="mt-16">
            <img src="{{ asset('images/job-done-1.jpg') }}" alt="Building" class="w-full h-full object-cover ">

            <div class="px-12 my-12">
                <h3 class="mb-8 text-center">
                    Use Health Savings Accounts (HSAs)
                </h3>
                <p class="text-left">
                    Contribute to an HSA if you have a high-deductable health insurance plan.HSA contributions are tax-deductible, and the money can be used tax-free for qualified medical expenses.
                </p>
                <h3 class="my-8 text-center">
                    Charitable contributions
                </h3>
                <p class="text-left">
                    Donate to registered charities.You contributions may be tax-deductible, reducing your taxable income.
                </p>
                <h3 class="my-8 text-center">
                    Tax-loss harvesting
                </h3>
                <p class="text-left">
                    Offset capital gains by selling investments that have declined in value, thereby reducing your tax liability
                </p>
                <h3 class="my-8 text-center">
                    Utilize the gift tax exemption
                </h3>
                <p class="text-left">
                    You can gift a certain amount to individuals each year without incurring a gift tax.This can help reduce your
                    estate overall tax liability.
                </p>
                <h3 class="my-8 text-center">
                    Business deductions
                </h3>
                <p class="text-left">
                    If you are a business owner, ensure you’re taking full advantage of tax deductions related to your business expenses.
                </p>
                <h3 class="my-8 text-center">
                    Tax-efficient withdrawals
                </h3>
                <p class="text-left">
                    When you’re retired and withdrawing from your retirement accounts, plan your withdrawals to minimize the tax impact.Consider Roth conversion and other strategies
                </p>
                <h3 class="my-8 text-center">
                    Tax-Efficient Estate
                </h3>
                <p class="text-left">
                    Consult an estate planning attorney to structure your estate ia a way that minimizes estate taxes for you heirs.
                </p>
            </div>
        </div>
    </div>
@endsection
