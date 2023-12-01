<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Account
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Transaction> $transactions
 * @property-read int|null $transactions_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Account byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|Account filter($request)
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @mixin \Eloquent
 */
	class IdeHelperAccount {}
}

namespace App\Models{
/**
 * App\Models\Budget
 *
 * @property-read \App\Models\Account|null $account
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Transaction> $transactions
 * @property-read int|null $transactions_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Budget byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget filter($request)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget query()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget withDefaultFilter(?\App\Models\Filter $filter, callable $bypass)
 * @mixin \Eloquent
 */
	class IdeHelperBudget {}
}

namespace App\Models{
/**
 * App\Models\Debt
 *
 * @property-read \App\Models\Account|null $account
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\DebtPayment> $payments
 * @property-read int|null $payments_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Debt byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|Debt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Debt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Debt query()
 * @mixin \Eloquent
 */
	class IdeHelperDebt {}
}

namespace App\Models{
/**
 * App\Models\DebtPayment
 *
 * @property-read \App\Models\Account|null $account
 * @property-read \App\Models\Debt|null $debt
 * @property-read \App\Models\Transaction|null $transaction
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|DebtPayment byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|DebtPayment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DebtPayment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DebtPayment query()
 * @mixin \Eloquent
 */
	class IdeHelperDebtPayment {}
}

namespace App\Models{
/**
 * App\Models\Filter
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Filter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Filter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Filter query()
 * @mixin \Eloquent
 */
	class IdeHelperFilter {}
}

namespace App\Models{
/**
 * App\Models\Goal
 *
 * @property-read int $less_days
 * @property-read float $presentage
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GoalDetail> $goalDetails
 * @property-read int|null $goal_details_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Goal byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|Goal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Goal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Goal query()
 * @mixin \Eloquent
 */
	class IdeHelperGoal {}
}

namespace App\Models{
/**
 * App\Models\GoalDetail
 *
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|GoalDetail byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|GoalDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoalDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoalDetail query()
 * @mixin \Eloquent
 */
	class IdeHelperGoalDetail {}
}

namespace App\Models{
/**
 * App\Models\Month
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Budget> $budgets
 * @property-read int|null $budgets_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Transaction> $transactions
 * @property-read int|null $transactions_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Month active()
 * @method static \Illuminate\Database\Eloquent\Builder|Month byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|Month filter($request)
 * @method static \Illuminate\Database\Eloquent\Builder|Month inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Month newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Month newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Month query()
 * @mixin \Eloquent
 */
	class IdeHelperMonth {}
}

namespace App\Models{
/**
 * App\Models\Profile
 *
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Profile byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @mixin \Eloquent
 */
	class IdeHelperProfile {}
}

namespace App\Models{
/**
 * App\Models\Shortcut
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Shortcut newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shortcut newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shortcut query()
 * @mixin \Eloquent
 */
	class IdeHelperShortcut {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property-read \App\Models\Account|null $account
 * @property-read \App\Models\Account|null $account_target_data
 * @property-read \App\Models\Budget|null $budget
 * @property-read \App\Models\DebtPayment|null $debtPayment
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction byCurrentUser()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction filter($request)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @mixin \Eloquent
 */
	class IdeHelperTransaction {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Debt> $debts
 * @property-read int|null $debts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Filter> $filters
 * @property-read int|null $filters_count
 * @property-read string $joined_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Month> $months
 * @property-read int|null $months_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Profile|null $profile
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

